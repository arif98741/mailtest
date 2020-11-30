<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $mailSubject;

    /**
     * Create a new message instance.
     *
     * @param $details
     * @param $subject
     */
    public function __construct($details,$subject)
    {
        $this->details = $details;
        $this->mailSubject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->mailSubject)
            ->view('mail.testmail');
    }
}
