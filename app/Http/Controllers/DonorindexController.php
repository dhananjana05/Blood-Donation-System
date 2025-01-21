<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Donorcontact;


class DonorindexController extends Controller
{


    protected $task;
   
    public function __construct(){
  
      $this->task=new Donorcontact();



    }  




    public function index()
    {

        return view('donor.donorindex');
    }



    public function contact()
    {


        return view('donor.donorcontact');
    }




    

    public function store(Request $request)
    {

        $this->task->create($request->all());
        return redirect()->back();

    }
}
