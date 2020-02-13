<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        return self::build($data);
    }

    /**
     * Build the message.
     *
     * @param $data
     * @return $this
     */
    public function build(array $data)
    {
        return $this->markdown('emails.contact.contact-form', $data);
    }
}
