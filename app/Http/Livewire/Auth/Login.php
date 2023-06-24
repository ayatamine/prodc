<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    public $conditions=false;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
        'conditions' => ['required'],
    ];

    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            toast(trans('auth.failed'),'error');
            return;
        }
        toast(trans('frontend.loggedin_successfully'),'success');
        return redirect()->intended(route('dashboard'));
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.app');
    }
}
