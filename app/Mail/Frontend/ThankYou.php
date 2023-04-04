<?php

namespace App\Mail\Frontend;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThankYou extends Mailable
{
    use Queueable, SerializesModels;

    public $model;
    public $verifyuser;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($model, $verifyuser)
    {
        $this->model = $model;
        $this->verifyuser = $verifyuser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Mail.Frontend.ThankYou');
    }
}
