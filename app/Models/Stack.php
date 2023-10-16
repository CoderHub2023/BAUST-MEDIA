<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stack extends Model
{
    protected $table = 'stack';
    protected $fillable =[
        'stack',
        'users_id',
        'likes',
        'comments',
        'shares',
        'images',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    use HasFactory;
}
