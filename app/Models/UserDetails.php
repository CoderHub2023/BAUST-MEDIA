<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDetails extends Model
{
    protected $table = 'users_details'; 
    protected $fillable = [
        'cover_images',
        'profile_images',
        'skills',
        'about',
    ];
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
