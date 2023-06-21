<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_id',
        'store_name',
        'description',
        'star_up',
        'ranking',
        'tell',
        'address',
        'manager',
        'id',
    ];
}
