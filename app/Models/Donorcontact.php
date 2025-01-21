<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donorcontact extends Model
{
    use HasFactory;
    protected $fillable = [
        'iddonor',
        'contactName',
        'contactRelationship',
        'contactEmail',
        'contactMethod',
        'howHeardAbout',
       // 'termsAndConditions',
        //'privacyPolicy',
        //'consentForContact',
    ];
}
