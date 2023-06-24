<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\ProfessionalLogin;

// Route::middleware('guest')->group(function () {

//     //professionals
//     Route::get('professionals/login', ProfessionalLogin::class)
//         ->name('professionals.login');
//     //TODO: add auth:professional
//     Route::get('/verify-email/{id}/{token}', [App\Http\Controllers\Auth\ProfessionalController::class, 'verifyEmail'])->middleware(['web'])->name('professional.verify');
// });

// Route::get('password/reset', Email::class)
//     ->name('password.request');

// Route::get('password/reset/{token}', Reset::class)
//     ->name('password.reset');

// Route::middleware('auth:professional')->group(function () {
    
//     Route::get('password/confirm', Confirm::class)
//         ->name('password.confirm');
//     Route::post('logout/{professional}', LogoutController::class)
//         ->name('logout');
// });
