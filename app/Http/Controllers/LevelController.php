<?php

namespace App\Http\Controllers;

use App\Http\Requests\LevelAddRequest;
use App\Level;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    use DeleteModelTrait;
    private $level;

    public function __construct(Level $level)
    {
        $this->level = $level;
    }
    public function index()
    {
        $levels = $this->level->paginate(10);
        return view('admin.level.index', compact('levels'));
    }

    public function create()
    {
        return view('admin.level.add');
    }

    public function store(LevelAddRequest $request)
    {
        $this->level->create([
            'LevelName' => $request->LevelName
        ]);
        return redirect()->route('levels.index');
    }

    public function edit($id, Request $request)
    {
        $LevelFollowIdEdit = $this->level->find($id);
        return view('admin.level.edit', compact('LevelFollowIdEdit'));
    }

    public function update($id, Request $request)
    {
        $this->level->find($id)->update([
            'LevelName' => $request->LevelName
        ]);
        return redirect()->route('levels.index');
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->level);
    }
}
