<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function welcome(){
        if(Auth::check()){
            return 'you are login user';
        }

        return 'you are not login';
    }
}
