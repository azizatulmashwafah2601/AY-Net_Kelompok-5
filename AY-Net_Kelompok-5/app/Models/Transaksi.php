<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $primaryKey ="id_transaksi";
    protected $fillable = [
        'id_bulan', 'years', 'id_pelanggan', 'total_bayar', 'tgl_transaksi', 'status',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan', 'id_pelanggan');
    }

    public function bulan()
    {
        return $this->hasOne(Bulan::class, 'id_bulan', 'id_bulan');
    }
    protected $casts = [
        'id_bulan' => 'integer',
        'id_pelanggan' => 'integer',
    ];
}
