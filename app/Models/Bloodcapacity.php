<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloodcapacity extends Model
{
    use HasFactory;


    protected $fillable = [
        'capacity',
        'blood_type',
        'date',
        
    ];
}
