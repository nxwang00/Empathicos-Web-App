<?php

namespace App\Mail\Questions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AskQuestions extends Mailable
{
    use Queueable, SerializesModels;
    public $questionData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($questionData)
    {
        $this->questionData = $questionData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Ask Ana from Clients')->view('emails.questions.ask');
    }
}
