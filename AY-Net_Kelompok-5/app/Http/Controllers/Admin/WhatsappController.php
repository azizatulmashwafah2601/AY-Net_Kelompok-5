<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;

class WhatsappController extends Controller
{
    public function redirectToWhatsApp(Request $request, $id_pelanggan) {
        $pelanggan = Pelanggan::findorfail($id_pelanggan);
        $nama_pelanggan = $pelanggan->getOriginal()['nama_pelanggan'];
        $text = ' kami mengingatkan bahwa anda belum membayar tagihan internet';
        $no_telp = $pelanggan->getOriginal()['no_telp'];
        $no_telp = "62".substr($no_telp,1);
        $whatsappUrl = 'https://api.whatsapp.com/send?phone='.$no_telp.'&text=Hai sdr/i '.$nama_pelanggan.$text;
        
        return redirect()->away($whatsappUrl);
    }
}