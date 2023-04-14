<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use routes\web;

class TagihanController extends Controller
{
    public function index(){
        return view('pages.admin.tagihan.tagihan');
    }
}
