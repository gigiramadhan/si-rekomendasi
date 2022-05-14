<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahPengelola extends Model
{
    use HasFactory;

    protected $table = "tb_rumah_pengelola";
    protected $fillable = [
        'type',
        'nama_perumahan',
        'alamat',
        'harga',
        'fasilitas',
        'gambar',
    ];
}
