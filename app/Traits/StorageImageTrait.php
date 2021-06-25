<?php

namespace App\Traits;

use http\Env\Request;
use Illuminate\Support\Str;
use Storage;
trait StorageImageTrait{
    public function storageTraitUpload($request, $fileName, $foderName)
    {
        if($request->hasFile($fileName)){
            $file = $request->$fileName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = str::Random(20) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file($fileName)->storeAs('public/' . $foderName . '/' . auth()->id(), $fileNameHash);
            $dataUploadTrait = [
                'file_name' =>$fileNameOrigin,
                'file_path' => Storage::url($filePath)
            ];
            return $dataUploadTrait;
        }
        return null;
    }

}
