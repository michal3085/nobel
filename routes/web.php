<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/{service}', [ServicesController::class, 'routeDispatch'])->name('service.route.dispatch');
Route::post('/sendMail', [ServicesController::class, 'sendMail'])->name('service.send.mail');
