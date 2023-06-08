<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Transaksi;

class WhatsappController extends Controller
{
    public function redirectToWhatsApp(Request $request, $id_transaksi) {
        $transaksi = Transaksi::with(['pelanggan', 'bulan'])
                    ->find($id_transaksi);
        $nama_pelanggan = $transaksi->pelanggan->getOriginal()['nama_pelanggan'];
        $no_telp = $transaksi->pelanggan->getOriginal()['no_telp'];
        $bulan = $transaksi->bulan->getOriginal()['nama_bulan'];
        $tahun = $transaksi->getOriginal()['years'];
        $no_telp = "62".substr($no_telp,1);
        $text = ' kami mengingatkan bahwa anda belum membayar tagihan internet pada bulan '.$bulan.' '.$tahun.'.';
        $text2 = ' Mohon segera lakukan pembayaran pada tim AY Net.';
        $whatsappUrl = 'https://api.whatsapp.com/send?phone='.$no_telp.'&text=Hai sdr/i '.$nama_pelanggan.$text.$text2;
        
        // return response()->json([
        //     'transaksi'=>$transaksi
        // ]);
        return redirect()->away($whatsappUrl);
    }
}
