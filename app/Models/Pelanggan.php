<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = [
        'nama_pelanggan',
        'jenis_kelamin',
        'no_hp',
        'jenis_tiket',
        'tanggal_masuk',
        'jumlah_orang',
        'total_bayar'
    ];
}