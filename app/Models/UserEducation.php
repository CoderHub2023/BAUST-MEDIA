<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserEducation extends Model
{
    protected $fillable = [
        'institution',
        'start',
        'end',
    ];
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
