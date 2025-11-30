<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;

class AuditLogs extends Model
{

    use HasFactory;

    protected $fillable = [
        'user_id',
        'description',
        'route',
        'method',
        'ip_address',
    ];

    public function userRelation(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    

    protected $table = 'audit_logs';
}
