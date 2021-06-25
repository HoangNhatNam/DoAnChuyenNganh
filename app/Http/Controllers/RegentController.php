<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegentAddRequest;
use App\Regent;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;

class RegentController extends Controller
{
    use DeleteModelTrait;
    private $regent;

    public function __construct(Regent $regent)
    {
        $this->regent = $regent;
    }

    public function index()
    {
        $regents = $this->regent->paginate(10);
        return view('admin.regent.index', compact('regents'));
    }

    public function create()
    {
        return view('admin.regent.add');
    }

    public function store(RegentAddRequest $request)
    {
        $this->regent->create([
            'RegentName' => $request->RegentName
        ]);
        return redirect()->route('regents.index');
    }

    public function edit($id)
    {
        $regentFollowIdEdit = $this->regent->find($id);
        return view('admin.regent.edit', compact('regentFollowIdEdit'));
    }

    public function update($id, Request $request)
    {
        $this->regent->find($id)->update([
            'RegentName' => $request->RegentName
        ]);
        return redirect()->route('regents.index');
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->regent);
    }
}
