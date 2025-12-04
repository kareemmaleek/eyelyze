<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    /** @use HasFactory<\Database\Factories\DevicesFactory> */
    use HasFactory;

    protected $fillable = [
        'device_name',
        'device_model',
        'device_health',
        'device_signal',
        'device_ip',
        'device_gsm_number',
        'status',
        'device_owner'
    ];
}
