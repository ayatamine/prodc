<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfessionalLogin extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;
    /** @var bool */
    public $conditions=false;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
        'conditions' => ['required'],
    ];

    public function login()
    {
        $this->validate();

        if (!Auth::guard('professional')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return;
        }
        toast(trans('frontend.loggedin_successfully'),'success');
        return redirect()->intended(route('home'));
    }
    public function render()
    {
        return view('livewire.auth.professional-login')->extends('layouts.app');
    }
}
