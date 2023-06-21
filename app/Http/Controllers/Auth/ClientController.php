<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function verifyEmail($id, $token)
    {
        
        try {
            if(request()->guard != 'client') abort(401);
            $client = Client::whereVerificationToken($token)->findOrFail($id);
            $client->update(
                [
                    'verification_token' => null,
                    'email_verified_at' => now()
                ]
            );
            Auth::guard('client')->login($client);
            toast(trans('frontend.email_verified_successfully'), 'success');
            return redirect()->route('home');
        } catch (Exception $ex) {
            toast(trans('frontend.inernal_error'), 'error');
            // return back();
        }
    }
}
