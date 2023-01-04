<?php

namespace App\Mail\Invitations;

use App\Invitation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInvitation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The payment instance.
     *
     * @var invitation
     */
    public $invitation;

    /**
     * Create a new message instance.
     *
     * @param  \App\Order $payment
     * @return void
     */
    public function __construct(Invitation $invitation)
    {
        $this->invitation = $invitation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Invitation - ' . get_setting_field('company'))->markdown('emails.invitations.send');
    }
}
