<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    // public function index($id){
    //     $user = User::find($id);
    //     return redirect('/{{$user->id}}')->with('user');
    // }
}
