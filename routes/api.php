<?php

use App\Http\Controllers\ControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/create-ghichu', [ControllerApi::class, 'createTaskBoard']);
Route::get('/GetData', [ControllerApi::class, 'GetData']);
Route::post('/GetID', [ControllerApi::class, 'getID']);
Route::post('/Update_ghichu', [ControllerApi::class, 'Update']);
Route::post('/Delete', [ControllerApi::class, 'Delete']);
