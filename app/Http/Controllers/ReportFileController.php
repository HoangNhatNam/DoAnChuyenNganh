<?php

namespace App\Http\Controllers;

use App\Report;
use App\ReportFile;
use App\Traits\DeleteModelTrait;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Storage;

class ReportFileController extends Controller
{
    use DeleteModelTrait;
    use StorageImageTrait;
    private $reportFile;
    private $report;
    public function __construct(ReportFile $reportFile, Report $report)
    {
        $this->reportFile = $reportFile;
        $this->report = $report;
    }

    public function index()
    {
        $reportfiles = $this->reportFile->latest()->paginate(5);
        return view('admin.reportfile.index', compact('reportfiles'));
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->reportFile);
    }

    public function activation(Request $request)
    {
        $reportFile = $this->reportFile->find($request->id);

        if ($reportFile->Active == 1) {
            $reportFile->Active = 0;
        } else {
            $reportFile->Active = 1;
        }
        try {
            $reportFile->update();
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
