<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;

class MyTestMailBackup extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $datapdf['details'] = $this->details;
        $pdf = PDF::loadView('emails.pdf', $datapdf);
        return $this->markdown('emails.sample-mail')->subject($this->details['email'])->attachData($pdf->output(), "profguide.pdf");
    }
}
