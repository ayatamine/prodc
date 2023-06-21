<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\ClientAuth;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\EmailVerificationController;


Route::middleware('guest')->group(function () {

    //professionals
    Route::get('professionals/login', [Register::class, 'login'])
        ->name('professionals.login');
    Route::get('/verify-email/{id}/{token}', [App\Http\Controllers\Auth\ProfessionalController::class, 'verifyEmail'])->middleware(['web', 'auth:professional'])->name('professional.verify');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth:professional')->group(function () {
    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
    Route::post('logout/{professional}', LogoutController::class)
        ->name('logout');
});
