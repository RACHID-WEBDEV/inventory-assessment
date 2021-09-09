<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactmail extends Mailable
{
    //pass the data
    public $data;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data=$data; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //define our subjectline

        $subject = $this->data['name'] .'send message on '.$this->data['comment'];  

        return $this->markdown('emails.contactmail')
        ->subject($subject)
        ->with([
            'data'=>$this->data
        ])
        ;
    }
}
