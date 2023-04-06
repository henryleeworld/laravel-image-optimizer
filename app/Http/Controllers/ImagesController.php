<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ImageOptimizer;

class ImagesController extends Controller {
    public function store(Request $request) {
        $this->validate($request, [
            'photo' => 'required',
            'photo.*' => 'image:svg'
        ]);
        if($request->hasfile('photo'))
        {
            foreach($request->file('photo') as $file)
            {
                $name = Str::uuid() . '.' . $file->extension();
                $filePath = public_path('/files/');
                $file->move($filePath, $name);
                ImageOptimizer::optimize($filePath . $name);
                $data[] = $name;
            }
        }
        $file= new File();
        $file->filenames=json_encode($data);
        $file->save();
        return back()->with('success', '檔案已經上傳成功！');
    }
}
