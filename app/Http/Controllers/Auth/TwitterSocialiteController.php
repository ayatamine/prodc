<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class TwitterSocialiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToTwitter()
    {
        return Socialite::driver('twitter')->redirect();
    }
       
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleCallback()
    {
        try {
     
            $user = Socialite::driver('twitter')->user();
            $finduser = User::where('social_id', $user->id)->orWhere('email',$user->email)->first();
      
            if($finduser){
      
                Auth::login($finduser);
     
                return redirect()->route('dashboard');
      
            }else{
                $newUser = User::create([
                    'first_name' => $user->name,
                    // 'last_name' => $user->given_name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'twitter',
                    'password' => encrypt('password'),
                    'profile_photo_path' => $user->avatar ?? generate_avatar($user->name),
                    'email_verified_at'=>now()
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
