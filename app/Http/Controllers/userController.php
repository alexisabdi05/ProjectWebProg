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
        $user->valAdmin= 0;
        $user->save();
        return redirect( $user->id);
    }

    public function validate(Request $request){
        if ($request->identify == "User") {
            $validateUser = $request->validate([
                'username' => 'exists:users,username',
                'password' => 'exists:users,password'
            ]);
            $person = User::where('username', '=', $validateUser['username'])->first();
            return redirect($person->id);
        } else {
            $validateUser = $request->validate([
                'username' => 'exists:admins,username',
                'password' => 'exists:admins,password'
            ]);
            $person = Admin::where('username', '=', $validateUser['username'])->first();
            return redirect($person->username);
        }
    }

}
