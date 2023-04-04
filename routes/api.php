<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadImageController;
use App\Http\Controllers\PostMetaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post("image/upload",[UploadImageController::class,'multipleImageUpload']);

Route::post("media",[PostMetaController::class,'addmedia']);

Route::post("attachment",[UploadImageController::class,'show']);