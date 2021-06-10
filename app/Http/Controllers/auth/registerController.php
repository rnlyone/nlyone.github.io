<?php

namespace App\Http\Controllers\auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class registerController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegisterForm(){
        return view("auth.register");
    }

    public function Register(Request $request){

        try {
            User::create(
                array(
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'remember_token' => Str::random(10)
                )
            );

            return redirect()->route('login')->with('success', "Pendaftaran Sukses, Silahkan Login.");

        } catch (\Exception $e) {
            return back()->with('error', 'Email telah digunakan');
        }


    }
}
