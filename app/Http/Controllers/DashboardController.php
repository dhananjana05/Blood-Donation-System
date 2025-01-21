<?php

namespace App\Http\Controllers;

use App\Models\Donationcamps;

use App\Models\Registration;

use App\Models\Bloodcapacity;

use App\Models\Donarinformation;
use App\Models\Hospital;



use Illuminate\Http\Request;

class DashboardController extends Controller
{

    protected $table = 'donationcamps';
    protected $received;

    public function __construct()
    {
       $this->received=new Donationcamps();
       
 
    }


    public function index()
    { 



        
     





        $count = Registration::count();
        $centers = Donationcamps::count();
        $donor = Donarinformation::count();
        $hospital = Hospital::count();





       // Retrieve count for blood type 'A+'
       $aPositiveCount = Bloodcapacity::where('blood_type', 'A+')->count();
      
       

       // Calculate progress percentage for 'A+' blood type
       $totalBloodTypeCount = Bloodcapacity::count(); // Total blood type count
       $aPositivePercentage = ($aPositiveCount / $totalBloodTypeCount) * 100;


      // $maxCapacity = 5000;
       ///$aPositivePercentage = ($aPositiveCount / $maxCapacity) * 100;
      // $aPositivePercentage = min($aPositivePercentage, 100);







        $response['tasks'] = $this->received->all();
        $response['count'] = $count;
        $response['centers'] = $centers;
        $response['donor'] = $donor;
        $response['hospital']=$hospital;
       // $response['aPositivePercentage'] = $aPositivePercentage;
        $response['aPositivePercentage'] = $aPositivePercentage;

       

       // $response['tasks']=$this->received->all();




        return view('dashboard.dashboard',$response);

        
    }






    //donationcamps data display from database

}
