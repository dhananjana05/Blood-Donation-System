<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donarinformation extends Model
{
    use HasFactory;
    protected $fillable = [
       

        'donorid',              
       'bloodGroup',
       'donationType',
       'lastDonationDate',
       'donationFrequency',
       'preferredLocation',
       'weight',
       'medicalConditions',
       'medications',
       'allergies',
       'travelHistory',
       'vaccinationStatus',
               
           ];
}
