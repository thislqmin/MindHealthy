<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup()
    {
        return view('signup');
    }
    public function signupPost(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password1' => 'required|min:6|confirmed',
        // ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register Successfully');
    }
    public function signin() 
    {
        return view('signin');
    }
    public function signinPost(Request $request) 
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Login Successfully');
        }

        return back()->with('error', 'email or password not found');
    }
}
