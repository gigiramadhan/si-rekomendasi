<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = "tb_booking";
    protected $fillable = [
        'user_id',
        'name_booking',
        'no_telp',
        // 'date_booking',
        'type_rumah',
        'status_booking',
    ];
}
