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
Route::middleware('guest')->group(function () {

    Route::get('/verify-email/{id}/{token}', [App\Http\Controllers\Auth\ClientController::class, 'verifyEmail'])->middleware(['web', 'auth:client'])->name('client.verify');
    //clients
    Route::get('clients/login',  [ClientAuth::class, 'register'])
        ->name('clients.login');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth:client')->group(function () {
    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
    Route::post('logout/{client}', LogoutController::class)
        ->name('logout');
});

