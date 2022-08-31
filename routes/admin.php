<?php

use App\Http\Controllers\Admin\EstablecimientoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('', [HomeController::class, 'index']);

Route::resource('establecimientos', EstablecimientoController::class)->names('admin.establecimientos');