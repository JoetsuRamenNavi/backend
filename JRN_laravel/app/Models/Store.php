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
        'sake_flag',
        'comment',
        'star_up',
        'ranking',
        'id',
    ];
}
