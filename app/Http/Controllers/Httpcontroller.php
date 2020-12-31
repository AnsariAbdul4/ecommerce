<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Httpcontroller extends Controller
{
    //
    function get_example(){
        return Http::get('https://reqres.in/api/user?page=1');
    }
}
