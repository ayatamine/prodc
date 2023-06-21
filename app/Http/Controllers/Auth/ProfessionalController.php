<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\Professional;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfessionalController extends Controller
{
    //
    public function verifyEmail($id, $token)
    {
        
        try {
            if(request()->guard != 'professional') abort(401);
            $professional = Professional::whereVerificationToken($token)->findOrFail($id);
            $professional->update(
                [
                    'verification_token' => null,
                    'email_verified_at' => now()
                ]
            );
            Auth::guard('professional')->login($professional);
            toast(trans('frontend.email_verified_successfully'), 'success');
            return redirect()->route('home');
        } catch (Exception $ex) {
            toast(trans('frontend.inernal_error'), 'error');
            // return back();
        }
    }
}
