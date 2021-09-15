<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;
    public $timestamp = false;

    protected $table='Hostels';
    protected $fillable=[
        'user_id',
        'city',
        'hostel_name',
        'hostel_img',
        'hostel_type',
        'available_seats',
        'total_persons',
        'facilities',
        'hostel_rent',
        'warden_name',
        'hostel_address',
    ];
}
