<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\Bloodrequest;
use App\Models\Donarinformation;

class BloodRequestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $bloodRequest;
    public $donor;

    public function __construct(Bloodrequest $bloodRequest, Donarinformation $donor)
    {
        $this->bloodRequest = $bloodRequest;
        $this->donor = $donor;
    }

    public function build()
    {
        return $this->subject('Blood Request Email')
                    ->view('emails.blood-request');
    }
}
