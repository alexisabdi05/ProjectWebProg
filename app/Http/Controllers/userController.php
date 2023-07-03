<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class userController extends Controller
{
    public function make(Request $request){
        $user = new User();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->valAdmin= FALSE;
        $user->save();
        // return redirect('/home/{id}')->with('id', '$user->id');
        // return redirect('/home/',$user->id);
        // return view('home', compact('user'));
        // return redirect()->route('home', ['id' => $user->id]);
        return redirect('/signin');
        // return redirect('')
    }

    public function validate(Request $request){
        // if ($request->identify == "User") {
            $validateUser = $request->validate([
                'username' => 'exists:users,username',
                'password' => 'exists:users,password'
            ]);
            $user = User::where('username', '=', $validateUser['username'])->first();
            // return redirect()->route('home', ['id'=>$person->id]);
            return redirect()->route('home', ['id' => $user->id]);
        // } else {
        //     $validateUser = $request->validate([
        //         'username' => 'exists:admins,username',
        //         'password' => 'exists:admins,password'
        //     ]);
        //     $person = Admin::where('username', '=', $validateUser['username'])->first();
        //     return redirect($person->username);
        // }
    }

}
