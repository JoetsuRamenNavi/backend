<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'votes_id',
        'store_id',
        'battle_term',
        'vote',
    ];
}
