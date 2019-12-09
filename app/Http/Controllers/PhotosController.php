<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use ImageOptimizer;

class PhotosController extends Controller {
    public function store() {
        $filename = Str::uuid() . '.svg';

        $this->validate(request(), [
            'photo' => 'required|image:svg'
        ]);

        request()->photo->storeAs('images', $filename);

        ImageOptimizer::optimize(storage_path('app/images/' . $filename));

        return response('OK', 201);
    }
}
