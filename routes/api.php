<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ApiAuthController;
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
Route::post('/login', [ApiAuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function ($route) {
    Route::POST('show-student', [StudentController::class,'show_api']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    // return $request->user();
});
