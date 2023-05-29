<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Bulan;
use routes\web;

class TransaksiController extends Controller
{
    public function index(){
        return view('pages.admin.transaksi.transaksi');
    }

    public function filter(){
        $transaksi = Transaksi::all();
        $filter = Transaksi::orderBy('id_transaksi','asc');
		    if(Transaksi::get('years')){
			    $filter->whereYear('created_at', Transaksi::get('years'));
		    }
		    if(Transaksi::get('nama_bulan')){
			    $filter->whereMonth('created_at', Transaksi::get('nama_bulan'));
		    }
		
        return view('pages.admin.transaksi.viewtransaksi', compact('filter', 'transaksi'));
    }

    // public function view(){
    //     $transaksi = Transaksi::all();
    //     return view('pages.admin.transaksi.viewtransaksi', compact('transaksi'));
    // }

    // public function update() {
    //     return view('pages.admin.transaksi.lunastransaksi');
    // }
}
