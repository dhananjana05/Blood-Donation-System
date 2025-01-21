<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use  App\Models\User;



class AuthController extends Controller
{
public function index()
{


}


function login(){

    return view('authentication.login1');
}


function registration()
{
    return view('authentication.authregistration');
    
}





 function loginPost(Request  $request)
 {

        $request->validate([
          'email'=>'required',
          'password'=>'required'

            
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
          return view('authentication.loading');
           // return redirect()->intended(route('dashboard'));
        }
        return redirect(route('login'))->with("error","login fails");
 }     






 function registrationpost(Request $request)
 {

    $request->validate([

 
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required'

          
      ]);

      $data['name'] = $request->name;
      $data['email'] = $request->email;
      $data['password'] = Hash::make($request->password);

      $user = User::create($data);

      if(!$user){

        return redirect(route('registrations'))->with("error","registration  fails Try Again");
      }

      return redirect(route('login'))->with("success","Registration Successefully ");

     
 }





 function logout()
 {


   // Session::flush();
    //Auth::logout();


   // return redirect(route('login'));

   return view('home.home');
   
 }

}
