<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crips extends Model
{
    use HasFactory;

    protected $table = "tb_crips";
    protected $fillable = [
        'id_kriteria',
        'nama_crips',
        'bobot',
    ];
}
