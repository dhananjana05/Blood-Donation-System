<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;

class Registration extends Model
{
    use HasFactory;
    use Notifiable;


    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'dob',
        'age',
        'weight',
        'height',
        'Dlisence',
        'address',
        'email',
    ];




}
