<?php

namespace App\Mail;

use App\Question;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewQuestion extends Mailable
{
    use Queueable, SerializesModels;

    public $question;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Question $question)
    {
        $this->question = $question;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new-question');
    }
}
