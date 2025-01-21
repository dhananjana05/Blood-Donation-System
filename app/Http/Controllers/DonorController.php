<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donarinformation;
use App\Models\Donorcontact;

use Carbon\Carbon;



class DonorController extends Controller
{
    
 
    protected $task;

    protected $result;

   
  public function __construct(){

    $this->task=new Donarinformation();
   
   



  }


    public function index()
    {

      return view('donor.donordetails');


    }


    public function page(){

      return view('donor.donorindex');

    }



    public function check(){

      return view('donor.search');

    }


    public function search(Request $request){

      $searchQuery = $request->input('query');
      $userDonations = Donarinformation::where('donorid', $searchQuery)
      ->orderBy('lastDonationDate', 'desc')
      ->get();

      return view('donor.check', ['results' => $userDonations]);

    }

    public function store(Request $request)
    {

       
        $this->task->create($request->all());
         return redirect()->back();
       //return view('donor.donorcontact');

         //return redirect()->route('donor.donorcontact');
       

    }
  
}
