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
        'tell',
        'address',
        'store_url',
        'image',
        'entry_item',
        'entry_price',
        'entry_comment',
        'id',
    ];
}
