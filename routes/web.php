<?php

use App\Http\Controllers\ImagesController;
use Illuminate\Support\Facades\Route;

Route::get('/upload-images', function () {
    return view('upload-images');
});

Route::post('/upload-images', [ImagesController::class, 'store']);

/*
Route::middleware('optimizeImages')->group(function () {
    // all images will be optimized automatically
    Route::post('upload-images', 'UploadController@index');
});
*/
