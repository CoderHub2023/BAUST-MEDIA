<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    protected $table = 'users_network';
    protected $fillable =[
        'users_id',
        'network_id'
    ];
    use HasFactory;
}
