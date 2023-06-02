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
        $tagihan = Transaksi::Join('bulan', 'bulan.id_bulan', '=', 'transaksi.id_bulan')
                    ->Join('pelanggan', 'pelanggan.id_pelanggan', '=', 'transaksi.id_pelanggan')
                    ->orderBy('id_transaksi', 'asc')->get();
        $bulan = Bulan::orderBy('id_bulan', 'asc')->get();
        $pelanggan = Pelanggan::orderBy('id_pelanggan', 'asc')->get();
        
        return view('pages.admin.tagihan.tagihan', compact('bulan', 'pelanggan', 'tagihan'));
    }

    public function save(Request $request)
    {
        Transaksi::create([
            'id_bulan' => $request->id_bulan,
            'years' => $request->years,
            'id_pelanggan' => $request->id_pelanggan,
            'id_paket' => $request->id_paket,
            'total_bayar' => '0',
            'tgl_transaksi' => now(),
            'status' => 'Belum Bayar',
        ]);

        return redirect('admin/addtagihan')->with('toast_success', 'Data Berhasil Ditambahkan');
    }
}
