<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function loginHome()
    {
        return view('admin.login.login');
    }
}
