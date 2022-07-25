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
        'stok',
        'gambar',
        'rentang_harga',
        'rentang_luas_bangunan',
        'rentang_luas_tanah',
        'bobot_fasilitas',
    ];

    // public function detailData($id){

    //     return :table('tb_rumah')->where('id', $id)->first();

    // }
}
