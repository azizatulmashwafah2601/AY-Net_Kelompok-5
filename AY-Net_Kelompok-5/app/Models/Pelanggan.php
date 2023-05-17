<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = "pelanggan";
    protected $primaryKey ="id_pelanggan";
    protected $fillable = [
        'nama_pelanggan', 'alamat', 'no_telp', 'email', 'nama_paket',
    ];
}
