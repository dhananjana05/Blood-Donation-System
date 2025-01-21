<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donationcamps extends Model
{
    use HasFactory;

    protected $fillable = [
        'place',
        'address',
        'date',
        'from',
        'to',
        'description',
        'status',
     

        
    ];

}
