<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = "pelanggan";
    protected $primaryKey ="id_pelanggan";
    protected $fillable = [
        'nama_pelanggan', 'alamat', 'no_telp', 'email', 'id_paket',
    ];

    protected $with = ['paket'];

    public function paket()
    {
        return $this->hasOne(Paket::class, 'id_paket', 'id_paket');
    }

    protected $casts = [
        'id_paket' => 'integer',
    ];
}
