<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesekletController;
use App\Http\Controllers\legmenosegController;
use App\Http\Controllers\TavolsagController;
use App\Http\Controllers\gombnyomos_hrd_Controller;

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

Route::post("/homerseklet/beszuras",[HomesekletController::class,'create']);
Route::post("/legmenoseg/beszuras",[legmenosegController::class,'create']);
Route::post("/tavolsag/beszuras",[TavolsagController::class,'create']);
Route::post("/gombnyomos_hrd/beszuras",[gombnyomos_hrd_Controller::class,'create']);