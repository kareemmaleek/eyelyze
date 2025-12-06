<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function userRelation(): BelongsTo
    {
        return $this->belongsTo(User::class, 'device_owner');
    }
}
