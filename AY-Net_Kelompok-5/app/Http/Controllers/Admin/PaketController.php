<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use routes\web;

class PaketController extends Controller
{
    public function index(){
        return view('pages.admin.paket.paket');
    }

    public function addpaket(){
        return view('pages.admin.paket.addpaket');
    }

    public function savepaket(Request $request){
        dd($request)->all();
    }
}
