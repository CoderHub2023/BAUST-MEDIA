<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserWork extends Model
{
    protected $table = 'users_works';
    protected $fillable=[
        'work_at',
        'users_id',
        'position',
        'start',
        'end',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    use HasFactory;
}
