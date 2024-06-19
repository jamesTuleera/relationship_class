<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //

    public function register(Request $r){
        // dd($r);
       $fields = $r->validate([
            'name' => 'required | min:3',
            'email' => 'required',
            'password' => 'required | confirmed'
        ]);

        $user = User::create($fields);

        Auth::login($user);

        return redirect()->route('home');

    }

    public function login(Request $r){
        // dd($r);
       $fields = $r->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // $user = User::create($r->all());


        if(Auth::attempt($fields)){
            $r->session()->regenerate();
            return redirect()->route('home');
        }




        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');

    }
}
