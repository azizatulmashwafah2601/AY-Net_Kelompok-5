<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Paket;
use App\Models\Bulan;
use App\Models\Transaksi;
use routes\web;

class TagihanController extends Controller
{
    public function add(){
        $paket = Paket::orderBy('id_paket', 'asc')->get();
        $harga_paket = Paket::orderBy('id_paket', 'asc')->get();
        $bulan = Bulan::orderBy('id_bulan', 'asc')->get();
        $pelanggan = Pelanggan::orderBy('id_pelanggan', 'asc')->get();
        $tagihan = Transaksi::all();
        return view('pages.admin.tagihan.tagihan', compact('paket', 'harga_paket', 'bulan', 'pelanggan', 'tagihan'));
    }

    public function save(Request $request)
    {
        Transaksi::create([
            'nama_bulan' => $request->nama_bulan,
            'years' => $request->years,
            'nama_pelanggan' => $request->nama_pelanggan,
            'nama_paket' => $request->nama_paket,
            'harga_paket' => $request->harga_paket,
            'tgl_transaksi' => $request->tgl_transaksi,
            'status' => $request->status,
        ]);

        return redirect('admin/addtagihan')->with('toast_success', 'Data Berhasil Ditambahkan');
    }
}
