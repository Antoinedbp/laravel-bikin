<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserMail extends Mailable
{
    use Queueable, SerializesModels;
    public  $contenuUser;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contenuUser)
    {
        $this->contenuUser = $contenuUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('userMail');
    }
}
