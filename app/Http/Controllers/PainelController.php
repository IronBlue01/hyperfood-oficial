<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function authController(){
        return view('dashboard.auth-login-basic');
    }
}
