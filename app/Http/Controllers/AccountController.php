<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use  App\Models\User;


class AccountController extends Controller
{
  
  
  
  protected $result;


 protected $task;

 public function __construct(){

   $this->task=new User();
  



 }








    public function index()
    {
    
      //$response['tasks'] =$this->task->all();     

        
      

      //dd($response['tasks']);
        // return view('settingsection.setting')->with($response);
      //return view('account.main')->with($response);;



    }

    public function lording()
    {
     
      return view('account.loding');


    }


    public function check()

    {

      return view('account.index');
    }




    function loginPost(Request $request)
    {
   
           $request->validate([
             'email'=>'required',                                   //check login credentials
             'password'=>'required'
   
               
           ]);
           $credentials = $request->only('email','password');
           if(Auth::attempt($credentials)){
            
             $tasks = $this->task->all(); 
             return view('account.main', compact('tasks'));

            // return view('account.main');
              // return redirect()->intended(route('dashboard'));
           }
           return redirect(route('account.login'))->with("error","login fails");
    }
    

    








    //registration system user



    public function registrationpost(Request $request)
{



  //dd($request->all());
 
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required'
    ]);

    //$data['name'] = $request->name;
    //$data['email'] = $request->email;
    //$data['password'] = Hash::make($request->password);

     $user = User::create($data);

    if (!$user) {
      return redirect()->back();

 
    }
      
    Auth::login($user);

    // Redirect to the 'account.mainindex' route
    return redirect()->route('account.afteraddrole');

      }






      public function delete($id)
      {
          $result = User::find($id);
          
          if($result)
          {
              $result->delete();
          }

            
          $tasks = $this->task->all(); 
          return view('account.main', compact('tasks'));


      }




      public function afteraddrole()
      
      {

        //Auth::login($user);

       // return view('account.main');

           
       $tasks = $this->task->all(); 
       return view('account.main', compact('tasks'));
      }




    




   public function update(Request $request, $id)
   {


    $request->validate([
      'name' => 'required|string|max:255', // Add validation rules as per your requirement
      // Add more validation rules for other fields if needed
  ]);


  $user = User::find($id);

  if ($user) {
      $user->name = $request->input('name');
      // Update other fields here if needed
      $user->save();
      //dd($user);
     // return redirect()->back()->with('success', 'User role updated successfully.');

     $tasks = $this->task->all(); 
       return view('account.main', compact('tasks'));
    // return view('account.main');
  } else {
      return redirect()->back()->with('error', 'User not found.');
  }



   }




public function see ()
{

  return view('account.main');

}
    
   
}
