<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialLogin extends Controller
{
   public function gotogoogle(){

    return Socialite::driver('google')->redirect();

   }
   public function storeSocialdata(){

   }
}
