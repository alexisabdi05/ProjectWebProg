<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\CourseStatus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class userController extends Controller
{
    public function make(Request $request){
        $validateUserSignUp = $request->validate([
            'username' => 'unique:users,username',
            'email' => 'unique:users,email'
        ]);
        $user = new User();
        $user->email = $validateUserSignUp['email'];
        $user->username = $validateUserSignUp['username'];
        $user->password = $request->password;
        $user->valAdmin= FALSE;
        $user->save();
        for ($i=1; $i <= 117; $i++) {
            CourseStatus::create([
                'user_id' => $user->id,
            'coursedetail_id'=> $i
            ]);
        };
        return redirect('/signin');
    }

    public function validate(Request $request){
            $validateUser = $request->validate([
                'username' => 'exists:users,username',
                'password' => 'exists:users,password'
            ]);
            $user = User::where('username', '=', $validateUser['username'])->first();
            return redirect()->route('home', ['id' => $user->id]);
    }

}
