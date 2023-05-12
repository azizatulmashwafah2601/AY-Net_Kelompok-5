<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use routes\web;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/admin/dashboard');
        }
        return redirect('/admin/login');
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/admin/login');
    }
    public function index(){
        return view('pages.admin.login.login');
    }

    public function indexRegister() {
        return view('pages.admin.login.register'); 
    }

    public function saveRegister(Request $request) {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'foto_profil' => 'request',
            'remember_token' => Str::random(60),
        ]);

        return view ('pages.admin.login.login');
    }
}
