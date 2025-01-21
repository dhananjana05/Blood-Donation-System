<?php

namespace App\Events;

use App\Events\RegistrationCreated;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Registration;

class RegistrationCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */


     
    public $registration;
    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }





   public function createRegistration(Request $request)
   {
       // Validate the request data first...
   
       // Create a new registration using mass assignment
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
   
       // Dispatch the event after the registration is created
       event(new RegistrationCreated($registration));
   
       // Rest of your code...
   }
}
