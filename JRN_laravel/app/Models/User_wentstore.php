<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_wentstore extends Model
{
    use HasFactory;

    protected $fillable = [
        'went_id',
        'created_at',
        'updated_at',
        'id',
        'store_id',
    ];
}
