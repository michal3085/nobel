<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainPageController::class, 'index'])->name('dashboard');

// SERVICES
Route::get('/{service}', [ServicesController::class, 'routeDispatch'])->name('service.route.dispatch');
Route::post('/sendMail', [ServicesController::class, 'sendMail'])->name('service.send.mail');
Route::post('/sendKrsMail', [ServicesController::class, 'krsMailSend'])->name('service.send.krs');

// OFFiCES
Route::get('/biuro/{office}', [OfficeController::class, 'routeDispatch'])->name('office.route.dispatch');

// Q&A
Route::get('/pytania/odpowiedzi', [QuestionAnswerController::class, 'index'])->name('faq.index');

Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';
