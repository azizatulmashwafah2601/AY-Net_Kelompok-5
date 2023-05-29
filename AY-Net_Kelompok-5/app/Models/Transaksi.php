<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey ="id_transaksi";
    protected $fillable = [
        'nama_bulan', 'years', 'nama_pelanggan', 'nama_paket', 'harga_paket', 'tgl_transaksi', 'status',
    ];
}
