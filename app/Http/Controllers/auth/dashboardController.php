<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showDashboard(){
        return view('auth.dashboard');
    }

    public function Dashboard(){
        return view('auth.dashboard');
    }
}
