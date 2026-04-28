<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\PeriodeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route:: resource('fakultas', FakultasController::class);
route:: resource('periode', PeriodeController::class);



