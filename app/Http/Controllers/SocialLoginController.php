<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function gotogoogle(){
       return Socialite::driver('google')->redirect();
    }
    public function apigstore(){
        $socialuser = Socialite::driver('google')->user();
        dd($socialuser);
    }
}
