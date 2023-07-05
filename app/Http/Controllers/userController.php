<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\CourseStatus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function index(){
        return view('signin');
    }
    public function signup(){
        return view('signup');
    }

    public function home(){
        return view('home');
    }

    public function profile(){
        return view('profile');
    }

    public function achievement(){
        return view('achievement');
    }

    public function logout(){
        // @dd($request);
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/signin');
    }

    public function make(Request $request){
        $validateUserSignUp = $request->validate([
            'username' => 'unique:users,username',
            'email' => 'unique:users,email'
        ]);
        $user = new User();
        $user->email = $validateUserSignUp['email'];
        $user->username = $validateUserSignUp['username'];
        $password = bcrypt($request->password);
        $user->password = $password;
        $user->valAdmin= FALSE;
        $user->save();
        return redirect('/signin');
    }

    public function validate(Request $request){
        // @dd($request);
            $credentials  = $request->validate([
                'username' => 'required',
                'password' => 'required '
            ]);
            // @dd(Auth);
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                $user = User::where('username', '=', $credentials['username'])->first();
                // return redirect()->intended('/{id}/home', ['id' => $user->id]);
                return redirect()->intended('/home');
            };
            return back()->with('signinEror', 'Wrong Email/Password');
    }

    public function colorpalette(){
        return view('color');
    }
}
