<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserWork extends Model
{
    protected $fillable=[
        'work_at',
        'position',
        'start',
        'end',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
