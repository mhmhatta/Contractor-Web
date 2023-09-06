<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WebkontraktorEmail extends Mailable
{
    private $data;
  
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
      
        $this->data = $data;
       
    }
    public function build()
    {
        $nego = $this->data;
      
       return $this->from('filzaramadhan2003@students.usu.ac.id')
                   ->view('emailku', compact('nego'));
    }
}
