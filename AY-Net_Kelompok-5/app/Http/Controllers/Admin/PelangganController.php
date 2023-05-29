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
        $paket = Paket::orderBy('id_paket', 'asc')->get();
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
    public function edit($id_pelanggan) {
        $paket = Paket::orderBy('id_paket', 'desc')->get();
        $pelanggan = Pelanggan::findorfail($id_pelanggan);
        return view('pages.admin.pelanggan.editpelanggan', compact('paket', 'pelanggan'));
    }

    public function update(Request $request, $id_pelanggan) {
        $this->validate($request, [
            'nama_pelanggan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'nama_paket' => 'required',
        ]);

        $pelanggan = Pelanggan::findorfail($id_pelanggan);
        $pelanggan->update($request->all());
        return redirect('admin/pelanggan')->with('toast_success', 'Data Berhasil Diubah');
    }

    public function destroy($id_pelanggan) {
        $pelanggan = Pelanggan::findorfail($id_pelanggan);
        $pelanggan->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}
