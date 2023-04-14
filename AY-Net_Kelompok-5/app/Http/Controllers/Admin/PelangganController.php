<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use routes\web;

class PelangganController extends Controller
{
    public function index(){
        return view('pages.admin.pelanggan.pelanggan');
    }
}
