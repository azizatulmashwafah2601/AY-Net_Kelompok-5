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

    public function add(){
        return view('pages.admin.paket.addpaket');
    }

    public function save(Request $request) 
    {
        $this->validate($request, [
            'nama_paket' => 'required',
            'harga_paket' => 'required',
        ]);

        Paket::create([
            'nama_paket' => $request->nama_paket,
            'harga_paket' => $request->harga_paket,
        ]);

        return redirect('admin/paket')->with('toast_success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id_paket) {
        $paket = Paket::findorfail($id_paket);
        return view('pages.admin.paket.editpaket', compact('paket'));
    }

    public function update(Request $request, $id_paket) {
        $this->validate($request, [
            'nama_paket' => 'required',
            'harga_paket' => 'required',
        ]);

        $paket = Paket::findorfail($id_paket);
        $paket->update($request->all());
        return redirect('admin/paket')->with('toast_success', 'Data Berhasil Diubah');
    }

    public function destroy($id_paket) {
        $paket = Paket::findorfail($id_paket);
        $paket->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus');
    }
}
