<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;

class RegisterdonorController extends Controller
{
    protected $table = 'registration';


    //protected $task;
    protected $received;
    public function __construct()
    {
       $this->received=new Registration();
       
 
    }










    

    public function index(){

       $response['tasks']=$this->received->all();
//dd($response['tasks']);


       return view('register.registeredonors')->with($response);


       //$tasks = $this->reg->all();
       //return view('register.registeredonors', compact('tasks'));


    }
}
