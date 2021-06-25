<?php

namespace App\Http\Controllers;

use App\CallForPaper;
use App\Traits\DeleteModelTrait;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use DateTime;
use Imagick;

class CallforpaperController extends Controller
{
    use StorageImageTrait;
    use DeleteModelTrait;
    private $callforpaper;
    public function __construct(CallForPaper $callforpaper)
    {
        $this->callforpaper = $callforpaper;
    }

    public function index()
    {
        $callforpapers = $this->callforpaper->latest()->paginate(5);
        return view('admin.callforpaper.index', compact('callforpapers'));
    }

    public function create()
    {
        return view('admin.callforpaper.add');
    }

    public function store(Request $request)
    {
        $dataCreate = [
            'title' => $request->title,
            'dateCreate' => new \DateTime('now'),
            'active' => 0
        ];
        $dataUpload = $this->storageTraitUpload($request, 'path', 'callforpaper');
        if(!empty($dataUpload))
        {
            $dataCreate['path'] = $dataUpload['file_path'];
        }
        $callforpaper = $this->callforpaper->create($dataCreate);
        return redirect()->route('callforpaper.index');
    }

    public function activation(Request $request)
    {
        $user = $this->callforpaper->find($request->id);

        if ($user->active == 1) {
            $user->active = 0;
        } else {
            $user->active = 1;
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

    public function edit($id)
    {
        $callforpaper = $this->callforpaper->find($id);
        return view('admin.callforpaper.edit', compact('callforpaper'));
    }

    public function update(Request $request, $id)
    {
        $dataUpdate = [
            'title' => $request->title,
        ];
        $dataUpload = $this->storageTraitUpload($request, 'path', 'callforpaper');
        if(!empty($dataUpload))
        {
            $dataUpdate['path'] = $dataUpload['file_path'];
        }
        $this->callforpaper->find($id)->update($dataUpdate);
        return redirect()->route('callforpaper.index');
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->callforpaper);
    }
}
