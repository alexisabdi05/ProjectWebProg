<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
            // @dd($user);
            if (!$user) {
                $new_user = new User();
                $new_user->email = $google_user->getEmail();
                $new_user->username = $google_user->getName();
                $new_user->google_id = $google_user->getId();
                $new_user->save();
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
