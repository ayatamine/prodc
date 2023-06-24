<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\ProjectController;
use App\Http\Livewire\Dashboard\{
    Dashboard, PersonalData,WebsitePersonalData,MyPortfolios,MyProjects,MyTickets,MyVerifications,MyBallance,SelectAccountType
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
//register and login
Route::middleware(['guest'])->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});
Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
    ->middleware('signed')
    ->name('verification.verify');
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
        //------------------------------------------//---------------------------------------//
    Route::post('logout', LogoutController::class)
        ->name('logout');
    Route::get('select_account_type', SelectAccountType::class)
        ->name('select_account_type');
    
});
//google auth
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

Route::middleware('auth','verified','auth.account_type_selected')->group(function () {
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
    Route::get('/profile/personal-data',PersonalData::class)->name('personal_data');
    Route::get('/profile/website-setting',WebsitePersonalData::class)->name('profile_website_data');
    Route::get('/my/ballance',MyBallance::class)->name('my_ballance');
    Route::get('/my/projects',MyProjects::class)->name('my_projects');
    Route::get('/my/portfolios',MyPortfolios::class)->name('my_portfolios');
    Route::get('/my/tickets',MyTickets::class)->name('my_tickets');
    Route::get('/my/verifications',MyVerifications::class)->name('my_verifications');

    //------------------------------------------//---------------------------------------//
    Route::get('/projects/create',[ProjectController::class,'create'])->name('add_project');


});

