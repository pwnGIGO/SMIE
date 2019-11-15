<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmergencyCallReceived extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        //$this->distressCall = $distressCall;
    }

    public function build()
    {

        return $this->view('mails.emergency_call');
    }
}
