<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Paket;
use routes\web;

class PelangganController extends Controller
{
    public function index(){
        $pelanggan = Pelanggan::all();
        return view('pages.admin.pelanggan.pelanggan', compact('pelanggan'));
    }

    public function add(){
        $paket = Paket::orderBy('id_paket', 'desc')->get();
        return view('pages.admin.pelanggan.addpelanggan', compact('paket'));
    }

    public function save(Request $request)
    {
        Pelanggan::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'nama_paket' => $request->nama_paket,
        ]);

        return redirect('admin/pelanggan')->with('toast_success', 'Data Berhasil Ditambahkan');
    }
}
