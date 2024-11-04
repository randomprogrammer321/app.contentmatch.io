<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $emailMessage;

    public function __construct()
    {
        $this->emailMessage = 'If you receive this email, your mail configuration is working correctly!';
    }

    public function build()
    {
        return $this->subject('Test Email from Your App')
                    ->view('emails.test')
                    ->with([
                        'emailMessage' => $this->emailMessage
                    ]);
    }
} 