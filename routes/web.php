<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadwalKuliahFitrahController;
use App\Http\Controllers\CrudController;

Route::resource('/crud', JadwalKuliahFitrahController::class);