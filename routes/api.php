<?php

use App\Http\Controllers\CicleController;
use App\Http\Controllers\CiclesController;
use App\Http\Controllers\ModulController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/cicles', CicleController::class);
Route::resource('/moduls', ModulController::class);

Route::get('/cicles/mitjos', [CiclesController::class, 'getMitjos']);
Route::get('/cicles/superiors', [CiclesController::class, 'getSuperiors']);