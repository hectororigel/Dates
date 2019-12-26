<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DateCreated extends Mailable
{
    use Queueable, SerializesModels;


    public $dates;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dates)
    {
        $this->dates = $dates;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.date-created');
    }
}
