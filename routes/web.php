<?php

use App\Http\Controllers\uploadImagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/upload-images', function () {
    return view('upload-images');
});

Route::post('/upload-images', [uploadImagesController::class, 'store']);

/*
Route::middleware('optimizeImages')->group(function () {
    // all images will be optimized automatically
    Route::post('upload-images', 'UploadController@index');
});
*/
