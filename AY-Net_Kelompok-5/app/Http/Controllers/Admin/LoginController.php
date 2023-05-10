<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use routes\web;
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
}
