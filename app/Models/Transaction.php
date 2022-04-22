<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "tb_transaction";
    protected $fillable = [
        'nama',
        'no_telp',
        'tgl_bayar',
        'bukti_pembayaran',
        'status_transaksi',
    ];
}
