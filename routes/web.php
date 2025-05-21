<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyRegistrationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Dashboard\Newsletter\NewsletterController;
use App\Http\Controllers\Dashboard\Newsletter\SubscribersController;
use App\Http\Controllers\Dashboard\QA\QaSectionController;
use App\Http\Controllers\Dashboard\QA\QuestionAnswerController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReadyCompanyController;
use App\Http\Controllers\RegAndPoliticsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\VirtualOfficeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainPageController::class, 'index'])->name('main');

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
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

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
    Route::get('/newsletter/list', [NewsletterController::class, 'index'])->name('newsletter.index');
    Route::get('/newsletter/create', [NewsletterController::class, 'create'])->name('newsletter.create');
    Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletter.store');
    Route::get('/newsletter/{newsletter}/edit', [NewsletterController::class, 'edit'])->name('newsletter.edit');
    Route::put('/newsletter/{newsletter}/update', [NewsletterController::class, 'update'])->name('newsletter.update');
    Route::put('/newsletter/{newsletter}/status', [NewsletterController::class, 'status'])->name('newsletter.status');
    Route::delete('/newsletter/{newsletter}/delete', [NewsletterController::class, 'delete'])->name('newsletter.delete');
    Route::get('/newsletter/{newsletter}/send', [NewsletterController::class, 'send'])->name('newsletter.send');
    Route::get('/newsletter/{newsletter}/sent/list', [NewsletterController::class, 'sentList'])->name('newsletter.sentList');

    // NEWSLETTER - Subscribers
    Route::get('/newsletter/subscribers', [SubscribersController::class, 'index'])->name('newsletter.subscriber.index');
    Route::put('/newsletter/subscriber/{subscriber}/status', [SubscribersController::class, 'status'])->name('newsletter.subscriber.status');
    Route::delete('/newsletter/subscriber/{subscriber}/delete', [SubscribersController::class, 'delete'])->name('newsletter.subscriber.delete');

    // Q&A
    Route::get('/qa/list', [QuestionAnswerController::class, 'index'])->name('qa.index');
    Route::get('/qa/{section}/create', [QuestionAnswerController::class, 'create'])->name('qa.create');
    Route::post('/qa/store', [QuestionAnswerController::class, 'store'])->name('qa.store');
    Route::get('/qa/thread/{thread}/edit', [QuestionAnswerController::class, 'edit'])->name('qa.edit');
    Route::put('/qa/thread/{thread}/status', [QuestionAnswerController::class, 'status'])->name('qa.status');
    Route::put('/qa/thread/{thread}/update', [QuestionAnswerController::class, 'update'])->name('qa.update');
    Route::delete('/qa/thread/{thread}/delete', [QuestionAnswerController::class, 'delete'])->name('qa.delete');

    // Q&A SECTIONS
    Route::get('/qa/sections', [QaSectionController::class, 'index'])->name('qa.sections.index');
    Route::get('/qa/section/{section}/edit', [QaSectionController::class, 'edit'])->name('qa.sections.edit');
    Route::get('/qa/section/{section}/status', [QaSectionController::class, 'status'])->name('qa.sections.status');

    // USER
    Route::get('/user/list', [UsersController::class, 'index'])->name('user.index');
    Route::get('/user/create', [UsersController::class, 'create'])->name('user.create');
    Route::post('/user/store', [UsersController::class, 'store'])->name('user.store');
});

// READY COMPANY
Route::post('/readyCompanyMail', [ReadyCompanyController::class, 'sendMail'])->name('readyCompany.send.mail');
Route::post('/companyRegistrationMail', [CompanyRegistrationController::class, 'sendMail'])->name('companyRegistration.send.mail');

// NEWSLETTER
Route::post('/newsletter/add/subscriber', [SubscribersController::class, 'store'])->name('newsletter.add.subscriber');

// REG'S AND POLITICS
Route::get('/politics/private', [RegAndPoliticsController::class, 'privatePolitics'])->name('politics.private');

require __DIR__.'/auth.php';
