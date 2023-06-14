<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'date',
        'post',
        'lunch_flag',
        'store_id',
    ];
}
