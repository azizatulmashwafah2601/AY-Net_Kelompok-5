<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use routes\web;

class TransaksiController extends Controller
{
    public function index(){
        return view('pages.admin.transaksi.transaksi');
    }

    public function view(){
        return view('pages.admin.transaksi.viewtransaksi');
    }
}
