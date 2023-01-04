<?php

namespace App\Mail\Contacts;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The payment instance.
     *
     * @var Contact
     */
    public $contact;

    /**
     * Create a new message instance.
     *
     * @param  \App\Order $payment
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New Contact - ' . get_setting_field('company'))->markdown('emails.contacts.send');
    }
}
