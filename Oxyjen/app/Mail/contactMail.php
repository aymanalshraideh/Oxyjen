<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $datalis;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datalis)
    {
        //
        $this->datalis=$datalis;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Contact Message')->view('email.ContactEmail');
    }
}
