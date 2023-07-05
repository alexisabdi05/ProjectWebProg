<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
// use GuzzleHttp\Client;

// $client = new Client([
//     'verify' => false,
// ]);
class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect();
    }

    public function callbackGoogle(){
        try {

            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id','=',$google_user->getId())->first();
            @dd($user);
            if (!$user) {
                $new_user = User::create([
                    'username' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);
                Auth::login($new_user);
                return redirect()->intended('/home');
            } else{
                Auth::login($user);
                return redirect()->intended('/home');
            }
        } catch (Exception $e) {
            return redirect('/signin');
        }
    }
}
