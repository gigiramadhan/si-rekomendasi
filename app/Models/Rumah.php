<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    use HasFactory;

    protected $table = "tb_rumah";
    protected $fillable = [
        'type',
        'nama_perumahan',
        'alamat',
        'harga',
        'fasilitas',
        'gambar',
    ];
}
