<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function signup()
    {
        return view('auth.signup');
    }
}
