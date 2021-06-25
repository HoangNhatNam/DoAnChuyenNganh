<?php

namespace App\Http\Controllers;

use App\Certificate;
use App\Components\Recusive;
use App\Http\Requests\UserAddRequest;
use App\Level;
use App\Regent;
use App\Report;
use App\ReportFile;
use App\Role;
use App\Traits\DeleteModelTrait;
use App\User;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use DB;

class UserController extends Controller
{
    use DeleteModelTrait;

    private $user;
    private $certificate;
    private $level;
    private $regent;
    private $role;
    private $reportFile;
    private $report;

    public function __construct(User $user, Certificate $certificate,
                                Level $level, Regent $regent, Role $role,
                                ReportFile $reportFile, Report $report)
    {
        $this->user = $user;
        $this->certificate = $certificate;
        $this->level = $level;
        $this->regent = $regent;
        $this->role = $role;
        $this->reportFile = $reportFile;
        $this->report = $report;
    }

    public function create()
    {
        $htmlOptionCertificate = $this->getCertificate($idCertificate = '');
        $htmlOptionLevel = $this->getLevel($idLevel = '');
        $htmlOptionRegent = $this->getRegent($idRegent = '');
        $roles = $this->role->all();
        return view('admin.user.add', compact('htmlOptionCertificate', 'htmlOptionLevel', 'htmlOptionRegent', 'roles'));
    }

    public function index()
    {
        $users = $this->user->latest()->paginate(5);
        return view('admin.user.index', compact('users'));
    }

    public function store(UserAddRequest $request)
    {
        try {
            DB::beginTransaction();
            $user = $this->user->create([
                'FullName' => $request->FullName,
                'Certificate_id' => $request->Certificate,
                'Level_id' => $request->Level,
                'email' => $request->email,
                'Address' => $request->Address,
                'Phone' => $request->Phone,
                'Org' => $request->Org,
                'Office' => $request->Office,
                'Position' => $request->Position,
                'password' => Hash::make($request->password),
                'Active' => $request->Active,
                'Type' => $request->Type,
                'regent_id' => $request->Regent
            ]);
            $user->roles()->attach($request->role_id);
            DB::commit();
            return redirect()->route('users.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . '--- Line: ' . $exception->getLine());
        }
    }

    public function getCertificate($idCertificate)
    {
        $dataCertificate = $this->certificate->all();
        $recusiveCertificate = new Recusive($dataCertificate);
        $htmlOptionCertificate = $recusiveCertificate->certificateRecusive($idCertificate);
        return $htmlOptionCertificate;
    }

    public function getLevel($idLevel)
    {
        $dataLevel = $this->level->all();
        $recusiveLevel = new Recusive($dataLevel);
        $htmlOptionLevel = $recusiveLevel->levelRecusive($idLevel);
        return $htmlOptionLevel;
    }

    public function getRegent($idRegent)
    {
        $dataRegent = $this->regent->all();
        $recusiveRegent = new Recusive($dataRegent);
        $htmlOptionRegent = $recusiveRegent->regentRecusive($idRegent);
        return $htmlOptionRegent;
    }

    public function edit($id)
    {
        $user = $this->user->find($id);
        $htmlOptionCertificate = $this->getCertificate($user->Certificate_id);
        $htmlOptionLevel = $this->getLevel($user->Level_id);
        $htmlOptionRegent = $this->getRegent($user->regent_id);
        $roles = $this->role->all();
        $rolesOfUser = $user->roles;
        return view('admin.user.edit', compact('user', 'htmlOptionCertificate', 'htmlOptionLevel', 'htmlOptionRegent', 'roles', 'rolesOfUser'));
    }

    public function update($id, Request $request)
    {
        try {
            DB::beginTransaction();
            $this->user->find($id)->update([
                'FullName' => $request->FullName,
                'Certificate_id' => $request->Certificate,
                'Level_id' => $request->Level,
                'email' => $request->email,
                'Address' => $request->Address,
                'Phone' => $request->Phone,
                'Org' => $request->Org,
                'Office' => $request->Office,
                'Position' => $request->Position,
                'password' => Hash::make($request->password),
                'Active' => $request->Active,
                'Type' => $request->Type,
                'regent_id' => $request->Regent
            ]);
            $user = $this->user->find($id);
            $user->roles()->sync($request->role_id);
            DB::commit();
            return redirect()->route('users.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Message: ' . $exception->getMessage() . '--- Line: ' . $exception->getLine());
        }
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->user);
    }

    public function profile($id)
    {
        $user = $this->user->find($id);
        $reportFiles = [];
        $countReportFileTT = 0;
        $countReportFileTV = 0;
        $reports = $this->report->where('User_id', $id)->get();
        foreach ($reports as $reportFileItem) {
            $reportFiles[] = $this->reportFile->where('Report_id', $reportFileItem->id)->get();
        }
        foreach ($reportFiles as $reportFileItem) {
            $count = $reportFileItem->where('Type', 1)->count();
            $countReportFileTT = $countReportFileTT + $count;
            $count = $reportFileItem->where('Type', 2)->count();
            $countReportFileTV = $countReportFileTV + $count;
        }
        return view('admin.user.profile', compact('user', 'reports', 'reportFiles', 'countReportFileTT', 'countReportFileTV'));
    }

    public function activation(Request $request)
    {
        $user = $this->user->find($request->id);

        if ($user->Active == 1) {
            $user->Active = 0;
        } else {
            $user->Active = 1;
        }
        try {
            $user->update();
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        }catch (\Exception $exception){
            Log::error('Message' . $exception->getMessage() . 'line: ' . $exception->getFile());
            return response()->json([
                'code' => 500,
                'message' => 'fail'
            ], 500);
        }
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $users = DB::table('users')->where('FullName', 'LIKE', '%' . $request->search . '%')->get();
            if ($users) {
                foreach ($users as $key => $user) {
                    $output .= '<tr>
                    <td>' . $user->FullName . '</td>
                    <td>' . $user->email . '</td>
                    <td>' . $user->Active . '</td>
                    </tr>';
                }
            }
            return Response($output);
        }
    }
}
