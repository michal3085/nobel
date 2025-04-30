<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyRegistrationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\Newsletter\SubscribersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\ReadyCompanyController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VirtualOfficeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainPageController::class, 'index'])->name('dashboard');

// SERVICES
Route::get('/{service}', [ServicesController::class, 'routeDispatch'])->name('service.route.dispatch');
Route::post('/sendMail', [ServicesController::class, 'sendMail'])->name('service.send.mail');
Route::post('/sendKrsMail', [ServicesController::class, 'krsMailSend'])->name('service.send.krs');

// OFFiCES
Route::get('/biuro/{office}', [OfficeController::class, 'routeDispatch'])->name('office.route.dispatch');
Route::post('/sendOfficeMail', [OfficeController::class, 'sendMail'])->name('office.send.mail');
Route::get('/wirtualne/biuro/{office}', [VirtualOfficeController::class, 'routeDispatch'])->name('virtual.office.route.dispatch');

// Q&A
Route::get('/pytania/odpowiedzi', [QuestionAnswerController::class, 'index'])->name('faq.index');

// CONTACT
Route::get('/contact/index', [ContactController::class, 'index'])->name('contact.index');

// BLOG GUEST
Route::get('/blog/all', [BlogController::class, 'showAllGuest'])->name('blog.show.all');
Route::get('/blog/{post}', [BlogController::class, 'showForGuest'])->name('blog.show.guest');

Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/post/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/post/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/post/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/post/{post}/store', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/post/{post}/destroy', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::put('/post/{post}/changeStatus', [BlogController::class, 'changeStatus'])->name('blog.change.status');

    // NEWSLETTER
    Route::get('/newsletter/subscribers', [SubscribersController::class, 'index'])->name('newsletter.subscriber.index');
    Route::put('/newsletter/subscriber/{subscriber}/status', [SubscribersController::class, 'status'])->name('newsletter.subscriber.status');
    Route::delete('/newsletter/subscriber/{subscriber}/delete', [SubscribersController::class, 'delete'])->name('newsletter.subscriber.delete');
});

// READY COMPANY
Route::post('/readyCompanyMail', [ReadyCompanyController::class, 'sendMail'])->name('readyCompany.send.mail');
Route::post('/companyRegistrationMail', [CompanyRegistrationController::class, 'sendMail'])->name('companyRegistration.send.mail');

// NEWSLETTER
Route::post('/newsletter/add/subscriber', [SubscribersController::class, 'store'])->name('newsletter.add.subscriber');

require __DIR__.'/auth.php';
