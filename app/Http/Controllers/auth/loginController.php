<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLoginForm(){
        return view("auth.login");
    }

    public function Login(){

        $attr = request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::whereEmail(request('email'))->first();
        if (Auth::attempt($attr)){
            Auth::login($user);
            return redirect()->intended('/');
        } else {
            return back()->with('error', 'Email / Password Salah!');
        }
    }
}
