<?php

namespace App\Mail\Orders;

use App\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderSuccess extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The payment instance.
     *
     * @var Payment
     */
    public  $payment;
    public  $items;

    /**
     * Create a new message instance.
     *
     * @param  \App\Order $payment
     * @return void
     */
    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
        $this->items = json_decode($payment->items);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(get_setting_field('company').': New Order #'.$this->payment->payment_id)->markdown('emails.orders.success');
    }
}
