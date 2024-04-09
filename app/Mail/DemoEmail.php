<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data->toArray();
    }

    public function build()
    {
        return $this->from('shehal.herath32@gmal.com', 'Shehal Herath')
        ->subject('Demo Email')
        ->view('emails.demo', $this->data);
    }
}
