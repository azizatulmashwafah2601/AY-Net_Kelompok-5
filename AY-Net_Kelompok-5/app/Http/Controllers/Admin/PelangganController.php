<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use routes\web;

class PelangganController extends Controller
{
    public function index(){
        $listpelanggan = Pelanggan::all();
        return view('pages.admin.pelanggan.pelanggan', compact('listpelanggan'));
    }

    public function add(){
        return view('pages.admin.pelanggan.addpelanggan');
    }

}
