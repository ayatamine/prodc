<?php

use App\Http\Livewire\Services;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\Auth\FacebookSocialiteController;
use App\Http\Controllers\Auth\TwitterSocialiteController;
use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Livewire\Dashboard\{
    Dashboard, PersonalData,WebsitePersonalData,MyPortfolios,MyServices,MyTickets,MyVerifications,PayCommission,SelectAccountType,CompleteAccountDetails,SavedWorks
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
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
Route::get('/subscribe-to-package/{id}', [HomeController::class, 'subscribeToPackage'])->name('subscribe_to_package');
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
    //seletct account type (professional / client)
    Route::get('select-account-type', SelectAccountType::class)
        ->name('select_account_type');
    //complete account for professional
    Route::get('complete-account-details', CompleteAccountDetails::class)
        ->name('complete_account_details');
    
});
//google auth
Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);

Route::get('auth/facebook', [FacebookSocialiteController::class, 'redirectToFacebook']);
Route::get('callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);

Route::get('auth/twitter', [TwitterSocialiteController::class, 'redirectToTwitter']);
Route::get('callback/twitter', [TwitterSocialiteController::class, 'handleCallback']);

Route::middleware('auth','verified','auth.account_type_selected','auth.professional_account_completed')->group(function () {
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
    Route::get('/profile/personal-data',PersonalData::class)->name('personal_data');
    Route::get('/profile/website-setting',WebsitePersonalData::class)->name('profile_website_data');
    Route::get('/pay-commission',PayCommission::class)->name('pay_commission');
    Route::get('/my/services',MyServices::class)->name('my_services');
    Route::get('/my/portfolios',MyPortfolios::class)->name('my_portfolios');
    Route::get('/my/saved-works',SavedWorks::class)->name('saved_works');
    Route::get('/my/tickets',MyTickets::class)->name('my_tickets'); 
    Route::get('/my/verifications',MyVerifications::class)->name('my_verifications');

    //------------------------------------------//---------------------------------------//
    // Route::get('/services/create',[ServiceController::class,'create'])->name('add_service');//->middleware('auth.client');


});
Route::resource('services',ServiceController::class);
Route::resource('professionals',ProfessionalController::class);
Route::get('u/{username}',[HomeController::class,'userShow'])->name('users.show_by_username');
Route::get('charter',[HomeController::class,'charter'])->name('charter');
Route::get('pages/{slug}',[HomeController::class,'pages'])->name('front_pages');
Route::get('categories',[HomeController::class,'categories'])->name('categories');

    Route::get('blog/',[HomeController::class,'blogPage'])->name('blog.index');
    Route::get('blog/{slug}',[HomeController::class,'blogPageDetails'])->name('blog.show');

// Route::domain('blog.' . env('APP_URL'))->group(function () {
//     Route::get('/',[HomeController::class,'blogPage'])->name('blog');
//     Route::get('/{slug}',[HomeController::class,'blogPageDetails'])->name('blogDetails');
// });