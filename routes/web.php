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
Route::middleware(['guest','guest:professional','guest:client'])->group(function () {
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
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});



Route::resource('language', App\Http\Controllers\LanguageController::class)->only('index');

Route::resource('speciality', App\Http\Controllers\SpecialityController::class)->only('index', 'show');

Route::resource('skill', App\Http\Controllers\SkillController::class)->only('index', 'show');

Route::resource('professional', App\Http\Controllers\ProfessionalController::class)->only('index', 'show');

Route::resource('project', App\Http\Controllers\ProjectController::class)->only('index', 'show');

Route::resource('f-a-q', App\Http\Controllers\FAQController::class)->only('index', 'show');

Route::resource('work', App\Http\Controllers\WorkController::class)->only('index', 'show');
