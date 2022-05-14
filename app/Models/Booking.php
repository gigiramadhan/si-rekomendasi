<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "tb_booking";
    protected $fillable = [
        'name_booking',
        'no_telp',
        'date_booking',
        'upload_booking',
        'status_booking',
    ];
}
