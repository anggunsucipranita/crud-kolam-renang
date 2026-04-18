<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'nama_pelanggan',
        'total_pembayaran',
        'metode_pembayaran',
        'status_transaksi',
        'catatan'
    ];
}