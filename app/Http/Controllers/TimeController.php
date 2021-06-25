<?php

namespace App\Http\Controllers;

use App\Time;
use Illuminate\Http\Request;

class TimeController extends Controller
{
    private $time;
    public function __construct(Time $time)
    {
        $this->time = $time;
    }

    public function index()
    {
        $times = $this->time->latest()->paginate(5);
        return view('admin.time.index', compact('times'));
    }

    public function edit($id)
    {
        $times = $this->time->find($id);
        $dateSub = date('Y-m-d', strtotime($this->time->find($id)->reportSub));
        $timeSub = date('H:i:s', strtotime($this->time->find($id)->reportSub));
        $dateMoreFull = date('Y-m-d', strtotime($this->time->find($id)->reportMoreFull));
        $timeMoreFull = date('H:i:s', strtotime($this->time->find($id)->reportMoreFull));
        $dateSelection = date('Y-m-d', strtotime($this->time->find($id)->selection));
        $timeSelection = date('H:i:s', strtotime($this->time->find($id)->selection));
        $dateWorkshop = date('Y-m-d', strtotime($this->time->find($id)->workshop));
        $timeWorkshop = date('H:i:s', strtotime($this->time->find($id)->workshop));
        return view('admin.time.edit', compact( 'times',
            'dateSub', 'timeSub', 'dateMoreFull', 'timeMoreFull', 'dateSelection', 'timeSelection', 'dateWorkshop', 'timeWorkshop'));
    }

    public function update($id, Request $request)
    {
        $this->time->find($id)->update([
            'reportSub' => $request->reportSub,
            'reportMoreFull' => $request->reportMoreFull,
            'selection' => $request->selection,
            'workshop' => $request->workshop,
        ]);
        return redirect()->route('time.index');
    }
}
