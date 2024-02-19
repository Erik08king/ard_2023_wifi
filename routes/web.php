<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesekletController;
use App\Http\Controllers\legmenosegController;
use App\Http\Controllers\TavolsagController;
use App\Http\Controllers\gombnyomos_hrd_Controller;

Route::get('/', function () {
    return view('welcome');
})->name("fooldal");

Route::get('/homerseklet',[HomesekletController::class, 'index'])->name('homerseklet');
Route::get('/legmenoseg',[legmenosegController::class, 'index'])->name('legmenoseg');
Route::get('/tavolsag',[TavolsagController::class, 'index'])->name('tavolsag');
Route::get('/gombnyomos_hrd',[gombnyomos_hrd_Controller::class, 'index'])->name('gombnyomos_homoere_paratartalom_and_ppm');
