<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class, 'home']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/service-one',[HomeController::class, 'serviceOne'])->name('service.one');
Route::get('/service-two',[HomeController::class, 'serviceTwo'])->name('service.two');
Route::get('/service-three',[HomeController::class, 'serviceThree'])->name('service.three');
