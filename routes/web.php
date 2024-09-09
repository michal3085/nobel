<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/gotowe-spolki', [ServicesController::class, 'company'])->name('service.readyCompany');
