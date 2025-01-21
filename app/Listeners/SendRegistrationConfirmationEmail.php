<?php

namespace App\Listeners;

use App\Events\RegistrationCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\Mail;

class SendRegistrationConfirmationEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\RegistrationCreated  $event
     * @return void
     */
    public function handle(RegistrationCreated $event)
    {
        $registration = $event->registration;
        $subject = 'Registration Confirmation'; // Email Subject
        $content = "Hello {$registration->first_name},\n\n";
        $content .= "Thank you for registering with our website.\n";
        $content .= "Your registration details:\n";
        $content .= "First Name: {$registration->first_name}\n";
        $content .= "Last Name: {$registration->last_name}\n";
        $content .= "Email: {$registration->email}\n";
        $content .= "...\n"; // Add other registration fields as needed
        
        Mail::raw($content, function ($message) use ($registration, $subject) {
            $message->to($registration->email)
                    ->subject($subject);
        });
    }
}
