<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileregistrationController extends Controller
{
     public function index(){

        return view('register.profileandregister');
     }
}
