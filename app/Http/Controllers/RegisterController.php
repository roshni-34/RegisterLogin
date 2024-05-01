<?php

namespace App\Http\Controllers;

use App\Models\RegisterModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(){
        return view('register');
    }
    public function registerStore(Request $request){
        $user = RegisterModel::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => '2'
          ]);
        return redirect()->route('register')->with('success', 'Registration successful!');
    }
    public function login(){
        return view('login');
    }
    public function loginCheck(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $type = $user->type;
            if ($type == 1) {
                return redirect()->route('adminDashboard')->with('success', 'Logged in successfully!');
            } elseif ($type == 2) {
                return redirect()->route('userDashboard')->with('success', 'Logged in successfully!');
            }
        }
    }
    public function adminDashboard(){
        return view('adminDashboard');
    }
    public function userDashboard(){
        return view('userDashboard');
    }
}
