<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    use HasFactory;

    protected $table = "tb_bobot";
    protected $fillable = [
        'name_kriteria',
        'attribut',
        'bobot',
    ];
}
