<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Pelanggan;
use App\Models\Paket;
use App\Models\Bulan;
use routes\web;

class LaporanController extends Controller
{
    public function index() {
        $transaksi = Transaksi::with(['pelanggan', 'bulan'])->get();
        return view('pages.admin.laporan.laporan', compact('transaksi'));
    }

    public function cetakLaporan($tgl_awal, $tgl_akhir){
        $transaksi = Transaksi::with(['pelanggan', 'bulan'])
                    ->whereBetween('tgl_transaksi', [$tgl_awal, $tgl_akhir])
                    ->get();

        return view('pages.admin.laporan.printlaporan', compact('transaksi'));
    }
}
