<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ClientLogin extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;
    /** @var bool */
    public $conditions=false;

    public $captcha;
    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
        'conditions' => ['required'],
    ];

    public function login()
    {
        $this->validate();

        if (!Auth::guard('client')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
            return;
        }
        toast(trans('frontend.loggedin_successfully'),'success');
        return redirect()->intended(route('home'));
    }
 
    public function updatedCaptcha($token)
    {
        $response = Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . env('CAPTCHA_SECRET_KEY') . '&response=' . $token);
        $this->captcha = $response->json()['score'];
    
        if (!$this->captcha > .3) {
            $this->login();
        } else {
           toast(trans('frontend.google_recaptcha_error'),'error');
        }
    
    }
    public function render()
    {
        return view('livewire.auth.client-login')->extends('layouts.app');
    }
}
