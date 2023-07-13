<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nickname',
        'password',
        'mail',
    ];

//     public function store(){
//         return $this->hasOne(`App\Models\Store`);
//     }
 }


