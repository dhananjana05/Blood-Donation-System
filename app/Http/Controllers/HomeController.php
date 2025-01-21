<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Notification;


//use App\Models\Registration;
use App\Notifications\SendEmailNotification;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home');
    }



    public function sendnotification(){


        $users=User::all();
        $details=[
        'greeting'=>'Hi laravel developer',
        'body'=>'hi this is test',
        'actiontext'=>'subscribe',
        'actionurl'=>'/',
         'lastline'=>'this is last line',

        ];
        Notification::send($users, new SendEmailNotification($details));
        dd('dd');
    }
}
