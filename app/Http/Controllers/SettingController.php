<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Donationcamps;
use App\Models\Bloodcapacity;




class SettingController extends Controller
{


  



 protected $task;

  public function __construct(){

    $this->task=new Donationcamps();
   



  }

    public function index()
    {   

       $response['tasks'] =$this->task->all();       
        return view('settingsection.setting')->with($response);
    }


    public function store(Request $request)
    {


        

        $this->task->create($request->all());
        return redirect()->back();


        



    }

    public function updateStatus($id, $status)
    {
        $task = Donationcamps::find($id);
        if ($task) {
            $task->status = $status;
            $task->save();
            return redirect()->back()->with('success', 'Status updated successfully');
        }
        return redirect()->back()->with('error', 'Task not found');
    }
    
  

    public function blood(Request $request)
{
    $data = $request->validate([
        'capacity' => 'required',
        'blood_type' => 'required|in:A+,A-,AB+,AB-,O+,O-,B+,B-',
        'date' => 'required|date',
    ]);

    Bloodcapacity::create($data);

    //return redirect()->route('blood-capacity.index');
    return redirect()->back();
}
    





    
}
