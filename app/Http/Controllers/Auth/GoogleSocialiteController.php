<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleSocialiteController extends Controller
{
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
       
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {
     
            $user = Socialite::driver('google')->stateless()->user();
  
            $finduser = User::where('social_id', $user->id)->orWhere('email',$user->email)->first();
      
            if($finduser){
      
                Auth::login($finduser);
     
                return redirect()->route('dashboard');
      
            }else{
                $newUser = User::create([
                    'first_name' => $user->name,
                    'last_name' => $user->given_name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'google',
                    'password' => encrypt('password'),
                    'profile_photo_path' => $user->avatar ?? generate_avatar($user->name),
                ]);
                if($user->user['email_verified']){
                    $newUser->email_verified_at = now();
                    $newUser->save();

                }
     
                Auth::login($newUser);
      
                return redirect()->route('dashboard');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
