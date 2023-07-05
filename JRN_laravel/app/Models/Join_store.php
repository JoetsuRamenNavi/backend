<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join_store extends Model
{
    use HasFactory;

    protected $fillable = [
        'join_id',
        'battle_name',
        'battle_term',
        'ramen_name',
        'ramen_price',
        'store_id',
    ];
}
