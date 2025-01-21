<?php

namespace App\Http\Controllers;
use App\Models\Registration;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\Mail;



class RegistrationController extends Controller
{
    protected $reg;
   public function __construct()
   {
      $this->reg=new Registration();

   }


    





    public function index()
    {
        //$response['tasks']=$this->reg->all();
       
        //return view('register.reg')->with($response);

       // if($user->hasRole('admin')){
           //return view('register.reg')->with($response);
       // }else{
         //   dd('Dont get this page');



         $user = auth()->user(); // Get the currently authenticated user

        //  if ($user->hasRole('admin')) {
        //      // User has 'admin' role
        //      return view('register.reg')->with(['tasks' => $this->reg->all()]);
        //  } elseif ($user->hasRole('sub_admin')) {
        //      // User has 'sub_admin' role
        //      return view('register.sub_admin_page')->with(['tasks' => $this->reg->all()]);
        //  } else {
        //      // User has neither 'admin' nor 'sub_admin' role
        //      dd('You do not have access to this page');
        // }
       $user = auth()->user();
       if($user->hasPermissionTo('create_profile')){
        //$admin = User::find(1);
        //dd($admin);

           return view('register.reg');
        }else{
           dd('you donat have permission');
        }

    }

        


    


    public function store(Request $request)
    {
        //Role::create(['name' => 'admin']);
        //Role::create(['name' => 'sub_admin']);
        //Role::create(['name' => 'user']);


         //Permission::create(['name' => 'create_profile']);
        //Permission::create(['name' => 'edit articles']);
        //Permission::create(['name' => 'edit articles']);
          
       //$admin = User::find(2);
        //$admin = User::find(1);
      // $admin = User::find(3);



       //$admin->assignRole('admin');

        //$role_admin = Role::where('name' , 'admin')->first();


       // $role_admin->givePermissionTo('create_profile');



       $registration =$this->reg->create($request->all());
       // return redirect()->back();
       // return redirect()->route('dashboard');
       Mail::to($registration->email)->send(new RegistrationConfirmation($registration));

       // Redirect to a thank you page or any other desired view
       return view('register.reg')->with('registration', $registration);
    }







    

    public function createRegistration(Request $request)
{
    // Validate the request data first...

    $registrationData = $request->only([
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
    ]);

    $registration = Registration::create($registrationData);

    event(new RegistrationCreated($registration));

    // Send registration confirmation email
    Mail::to($registration->email)->send(new RegistrationConfirmation($registration));


    return view('register.reg')->with('registration', $registration);
}


 
}