<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(){
        return view('login');
    }

    function login_auth(Request $request){
        $user = User::where(['name'=>$request->name])->first();
        if (!$user || !Hash::check($request->password, $user->password)){
            return "username or password are incorrect";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }

    }
}
