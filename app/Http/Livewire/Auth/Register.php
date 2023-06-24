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
    public $is_client_form =false;
    /** @var string */
    public $name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';
    public $first_name, $last_name, $username, $phone_number, $nationality, $conditions;

    public function fullName(){
        return $this->first_name.' '.$this->last_name;
    }
    public function updatingNationality($value){
        $this->is_client_form=true;
    }
    public function updated($phone_number)
    {
        $this->validateOnly($phone_number, [
            'phone_number'=> ['string', 'required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10','unique:users'],
        ]);
    }
    public function ProfessionalRegister()
    {
        $validated_data = $this->validate([
            'conditions' => ['required'],
            'first_name' => ['string', 'required', 'max:250'],
            'last_name' => ['string', 'required', 'max:250'],
            'username' => ['string', 'required', 'unique:users'],
            'email' => ['string', 'required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);
        try {
            DB::transaction(function () {
                //

                $user = User::create([
                    'first_name' => $this->first_name,
                    'last_name' => $this->first_name,
                    'username' => $this->username,
                    'email' => $this->email,
                    'password' =>  Hash::make($this->password),
                    'verification_token'=> Str::random(40),
                    'profile_photo_path'=>generate_avatar($this->fullName())
                ]);
                $professional= new Professional();
                $user->professional()->save($professional);
                $user->notify(new ProVerifyEmailNotification());

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
            'phone_number' => ['string', 'required','regex:/^([0-9\s\-\+\(\)]*)$/','min:10','unique:users'],
            'username' => ['string', 'required', 'unique:users'],
            'nationality' => ['string', 'required'],
            'email' => ['string', 'required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
            'nationality' => ['required', 'string', 'min:3','max:100'],
        ]);
        try {
            DB::transaction(function () {
                //

                
                $user = Client::create([
                    'first_name' => $this->first_name,
                    'last_name' => $this->first_name,
                    'username' => $this->username,
                    'nationality' => $this->nationality,
                    'phone_number' => $this->phone_number,
                    'email' => $this->email,
                    'password' =>  Hash::make($this->password),
                    'verification_token'=> Str::random(40),
                    'profile_photo_path'=>generate_avatar($this->fullName())
                ]);
                $client= new Client();
                $user->client()->save($client);
                $user->notify(new ClientVerifyEmailNotification());
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
