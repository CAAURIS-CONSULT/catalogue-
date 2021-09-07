<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;
    public $cltNom;
    public $obj;
    public $text;

    public function __construct($mail,$cltNom,$obj,$text)
    {
       $this->mail = $mail;
       $this->cltNom = $cltNom;
       $this->obj = $obj;
       $this->text = $text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("VISITOR CATALOGUE")->markdown('emails.contactUs');
    }
}
