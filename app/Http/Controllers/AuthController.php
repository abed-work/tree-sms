<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{

    public function login(){
        return view('authentication.login');
    }

    public function signUp(Request $request){
        return view('authentication.signUp');
    }

    public function handleLogin(Request $request){

        $credentials = $request->validate([
            'username'       => ['required'],
            'password'       => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('users.index');
        }

        return redirect()->route('login');

    }

    public function handleSignUp(Request $request){

        $this->validate($request,[
            'username'          => 'required|min:3',
            'email'             => 'required|email|unique:users',
            'phoneNumber'       => 'required|min:3|unique:users',
            'password'          => 'min:8|required_with:confirmPassword|same:confirmPassword',
            'confirmPassword'   => 'min:8',
        ]);

        User::create([
            'username'      => $request->username,
            'email'         => $request->email,
            'phoneNumber'   => $request->phoneNumber,
            'password'      => Hash::make($request->password)
        ]);

        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
