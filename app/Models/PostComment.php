<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $table = 'post_comments'; // Specify the table name

    protected $fillable = [
        'user_id',
        'post_id',
        'comment', 
        // Add other columns here if necessary
    ];

    // Define relationships if needed
    // For example, defining relationships with users and posts table
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function stack()
    {
        return $this->belongsTo(Stack::class, 'post_id');
    }
    use HasFactory;
}
