<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// SERVICES
Route::get('/{service}', [ServicesController::class, 'routeDispatch'])->name('service.route.dispatch');
Route::post('/sendMail', [ServicesController::class, 'sendMail'])->name('service.send.mail');
Route::post('/sendKrsMail', [ServicesController::class, 'krsMailSend'])->name('service.send.krs');

// OFFiCES
Route::get('/offices/{office}', [OfficeController::class, 'routeDispatch'])->name('office.route.dispatch');
