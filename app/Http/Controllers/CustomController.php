<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomController extends Controller
{
    public function login(){
        return view("login");
    }
    public function loginAccount(Request $request){
        // User::create(['name'=>"jj", 'email'=>'jj@gmail.com',"password"=>bcrypt('password'),'tier'=>'gold' ]);

        $credentials = $request->validate([
            'emailOrPhone' => ['required'],
            'password' => ['required'],

        ]);

        if(is_numeric($request->emailOrPhone)){
            if (Auth::attempt(['phone' => $request->emailOrPhone, 'password' => $request->password])) {
                // The user is being remembered...
                return redirect()->route('home');
            }
        }else{
            if (Auth::attempt(['email' => $request->emailOrPhone, 'password' => $request->password])) {
                // The user is being remembered...
                return redirect()->route('home');
            }
        }

       
        return $request;    
    }

    public function passCodeLogin(){
        return view("passcode");
    }

    public function passCodeLoginAccount(Request $request){
       $request->validate([
        'passcode'=>"required",
       ]);

       $user = User::where('pass_code', $request->passcode)->first();

       if(isset($user)){
            Auth::login($user);
           return redirect()->route('home');
       }
       return "user not match";
    }

    public function logoutAccount(){
        Auth::logout();
        return redirect()->route('login');
    }
}

