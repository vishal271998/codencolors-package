<?php

namespace ImageUpload;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use ImageUpload\Traits\UploadTrait;

class UploadController extends Controller
{
    use UploadTrait;

    public function upload(Request $request, $path){
        if($request->hasFile('file'))
        {
                $fileContent = $request->file('file');
                $fileName = time() .rand('10', '100') .'.' . $fileContent->extension();
                $fileContent->move($path, $fileName);
                return $fileName;
        }
        else{
            return "File is missing";
        }
    }

    public function uploadMultiple(Request $request, $path){

        $files = $request->file('files');
        if($request->hasFile('files'))
        {
            foreach ($files as $documentFile) {
                $fileContent = $documentFile;
                $fileName = time() .rand('10', '100') .'.' . $fileContent->extension();
                $fileContent->move($path, $fileName);
                $allUploadedFiles[] = $fileName;
            }
            return $allUploadedFiles;
        }
        else{
            return "File is mssing";
        }
    }
}
