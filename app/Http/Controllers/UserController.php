<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

use App;

class UserController extends Controller
{

    // This is my Controller with stub
    function login(Request $r){        
        // App::setlocale('ur');
        // $pass = Hash::make('abdul');
        // echo 'Password is = '.$pass; die;
        $email = $r->input('email');
        $password = $r->input('password');
        $user = User::where(['email'=> $email])->first();
        if($user && Hash::check($password, $user['password'])){
            $r->session()->flash('success', __('lang.Login successfull'));
            return redirect('dashbord');
        } else {
            return redirect('/');
        }
    }

    function dashbord(){
        // App::setLocale(session('language'));
        return view('dashbord'); 
    }

    function chage_language(Request $r, $lang){
        $r->session()->put('language', $lang);
        // return redirect('/dashbord');
        return redirect()->back();
    }
}
