<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paket;
use routes\web;

class PaketController extends Controller
{
    public function index(){
        $listpaket = Paket::all();
        return view('pages.admin.paket.paket', compact('listpaket'));
    }

    public function addpaket(){
        return view('pages.admin.paket.addpaket');
    }

    public function savepaket(Request $request) {
        $request->validate([
            'nama_paket' => 'required',
            'harga_paket' => 'required',
        ]);

        Paket::create([
            'nama_paket' => $request->nama_paket,
            'harga_paket' => $request->harga_paket,
        ]);

        return redirect('admin/paket')->with('toast_success', 'Data Berhasil Ditambahkan');
    }
}
