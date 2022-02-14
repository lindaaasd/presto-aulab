<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $adminContact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($adminContact)
    {
        $this->adminContact = $adminContact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("admin@presto.com")->view("contact.contact-form");
    }
}
