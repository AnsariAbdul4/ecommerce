<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    // This is my Controller with stub
    function login(Request $r){
        // $pass = Hash::make('abdul');
        // echo 'Password is = '.$pass; die;
        $email = $r->input('email');
        $password = $r->input('password');
        $user = User::where(['email'=> $email])->first();
        if($user && Hash::check($password, $user['password'])){
            $r->session()->flash('success', 'Login successfull.');
            return redirect('dashbord');
        } else {
            return redirect('/');
        }
    }

    function dashbord(){
        return view('dashbord');
    }
}
