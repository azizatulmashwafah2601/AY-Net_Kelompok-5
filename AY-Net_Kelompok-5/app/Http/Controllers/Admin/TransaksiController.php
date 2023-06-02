<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Paket;
use App\Models\Bulan;
use routes\web;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = Transaksi::with(['pelanggan', 'bulan'])->get();
        
        return view('pages.admin.transaksi.transaksi', compact('transaksi'));
    }

    public function filter(Request $request){
        $tgl_mulai = $request->tgl_mulai;
        $tgl_selesai = $request->tgl_selesai;
        $transaksi = Transaksi::whereDate('tgl_transaksi','>=',$tgl_mulai)
                    ->whereDate('tgl_transaksi','<=',$tgl_selesai)
                    ->get();
		    
        return view('pages.admin.transaksi.transaksi', compact('transaksi'));
    }

    public function printNota($id_transaksi){
        $transaksi = Transaksi::with(['pelanggan', 'bulan'])
                    ->find($id_transaksi);
        // return response()->json([
        //     'transaksi'=> $transaksi
        // ]);
        return view('pages.admin.transaksi.printnota', compact('transaksi'));
    }

    public function edit($id_transaksi){
        $transaksi = Transaksi::findorfail($id_transaksi);
        return view('pages.admin.transaksi.edittransaksi', compact('transaksi'));
    }

    public function update(Request $request, $id_transaksi){
        $transaksi = Transaksi::findorfail($id_transaksi);
        $transaksi->update($request->all());
        return redirect('admin/transaksi')->with('toast_success', 'Data Berhasil Diubah');
    }
}
