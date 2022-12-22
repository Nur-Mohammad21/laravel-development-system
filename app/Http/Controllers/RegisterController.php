<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function loginHome()
    {
        return view('admin.login.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' =>'required|email',
            'password' =>'required|min:6',
        ]);
       $checkEmail = User::where('email',$request->email)->first();
       if(!empty($checkEmail))
       {
           if(password_verify($request->password,$checkEmail->password))
           {
                if(!Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
                {
                    return redirect()->back()->with('error','Credentails do not match our records.');
                }
                return redirect('/');
           }
           else
           {
               return redirect()->back()->with('error','Password does not match');
           }

       }
       else
       {
           return redirect()->back()->with('error','Email does not exists');
       }
    }

    public function frontLogout(Request $request)
    {
        Auth::logout();
//        $request->session()->invalidate();
//        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function signUp()
    {
        return view('admin.register.register');
    }

    public function register(Request $request)
    {
        $request->validate([
           'name' =>'required',
           'email' =>'required|email',
           'password' =>'required|min:6',
        ]);
        User::register($request);
        return redirect()->back()->with('message','User registered successfully.');

    }
    public function forgetPassword()
    {
        return view('admin.forget.forget');
    }
}
