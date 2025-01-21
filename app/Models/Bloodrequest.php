<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bloodrequest extends Model
{
    use HasFactory;


    protected $fillable = [
        
        'address',
        'date',
        'description',
        'bloodtype',
     

        
    ];
}
