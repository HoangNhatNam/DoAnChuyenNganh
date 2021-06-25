<?php

namespace App\Http\Controllers;

use App\Report;
use App\Traits\DeleteModelTrait;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReportController extends Controller
{
    use DeleteModelTrait;
    private $report;
    private $user;
    public function __construct(Report $report, User $user)
    {
        $this->report = $report;
        $this->user = $user;
    }

    public function index()
    {
        $reports = $this->report->latest()->paginate(5);
        return view('admin.report.index', compact('reports'));
    }

    public function create()
    {
        $users = $this->user->all();
        return view('admin.report.add', compact('users'));
    }

    public function store(Request $request)
    {
        $this->report->create([
            'ReportTitle' => $request->ReportTitle,
            'Summarize' => $request->Summarize,
            'DateSubmit' => new \DateTime('now'),
            'Active' => $request->Active,
            'User_id' => $request->User_id
        ]);
        return redirect()->route('report.index');
    }

    public function edit($id)
    {
        $users = $this->user->all();
        $report = $this->report->find($id);
        $date = date('Y-m-d', strtotime($this->report->find($id)->DateSubmit));
        $time = date('H:i:s', strtotime($this->report->find($id)->DateSubmit));
        return view('admin.report.edit', compact('report', 'users', 'time', 'date'));
    }

    public function update($id, Request $request)
    {
        $this->report->find($id)->update([
            'ReportTitle' => $request->ReportTitle,
            'Summarize' => $request->Summarize,
            'DateSubmit' => $request->DateSubmit,
            'Active' => $request->Active,
            'User_id' => $request->User_id
        ]);
        return redirect()->route('report.index');
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->report);
    }

    public function activation(Request $request)
    {
        $report = $this->report->find($request->id);

        if ($report->Active == 1) {
            $report->Active = 0;
        } else {
            $report->Active = 1;
        }
        try {
            $report->update();
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
}
