<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserEducation extends Model
{
    protected $table = 'users_education';
    protected $fillable = [
        'institution',
        'users_id',
        'subject',
        'start',
        'end',
    ];
    use HasFactory;
}
