<?php

namespace App\Http\Livewire\Auth;

use Alert;
use Exception;
use App\Models\User;
use App\Models\Client;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Professional;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use App\Notifications\ProVerifyEmailNotification;
use App\Notifications\ClientVerifyEmailNotification;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';
    public $first_name, $last_name, $username, $phone_number, $nationality, $conditions;

    public function ProfessionalRegister()
    {
        $validated_data = $this->validate([
            'conditions' => ['required'],
            'first_name' => ['string', 'required', 'max:250'],
            'last_name' => ['string', 'required', 'max:250'],
            'username' => ['string', 'required', 'unique:professionals'],
            'email' => ['string', 'required', 'email', 'unique:professionals'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);
        try {
            DB::transaction(function () {
                //

                $professional = Professional::create([
                    'first_name' => $this->first_name,
                    'last_name' => $this->first_name,
                    'username' => $this->username,
                    'email' => $this->email,
                    'password' =>  Hash::make($this->password),
                    'verification_token'=> Str::random(40)
                ]);
                $professional->notify(new ProVerifyEmailNotification());

            });

            
            toast(trans('frontend.registered_successfully'),'success');

        } catch (Exception $ex) {
            toast(trans('frontend.inernal_error'),'error');
        }

        //TODO: send admin notification (database notification)
        //TODO: if the email is verified redirect to "complete_register_page"(only for professionals)
        return redirect()->intended(route('home'));
    }
    public function ClientRegister()
    {
        $validated_data = $this->validate([
            'conditions' => ['required'],
            'first_name' => ['string', 'required', 'max:250'],
            'last_name' => ['string', 'required', 'max:250'],
            'phone_number' => ['string', 'required','regex:/^(\+\d{1,2}\d{10})$/','unique:clients'],
            'username' => ['string', 'required', 'unique:clients'],
            'nationality' => ['string', 'required'],
            'email' => ['string', 'required', 'email', 'unique:clients'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
            'nationality' => ['required', 'string', 'min:3','max:100'],
        ]);
        try {
            DB::transaction(function () {
                //

                
                $client = Client::create([
                    'first_name' => $this->first_name,
                    'last_name' => $this->first_name,
                    'username' => $this->username,
                    'nationality' => $this->nationality,
                    'phon_number' => $this->phon_number,
                    'email' => $this->email,
                    'password' =>  Hash::make($this->password),
                    'verification_token'=> Str::random(40)
                ]);
                $client->notify(new ClientVerifyEmailNotification());
            });
            toast(trans('frontend.registered_successfully'),'success');

        } catch (Exception $ex) {
            toast(trans('frontend.inernal_error'),'error');
        }

        //TODO: send admin notification (database notification)
        return redirect()->intended(route('home'));
    }

    public function render()
    {
        // return view('livewire.auth.register')->extends('layouts.auth');
        return view('livewire.auth.register')->extends('layouts.app');
    }
}
