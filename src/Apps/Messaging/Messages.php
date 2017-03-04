<?php

namespace ShawnSandy\Extras\Apps\Messaging;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Messages extends Mailable
{
    use Queueable, SerializesModels;

    public $messages;
    private $email;

    /**
     * Create a new message instance.
     *
     * @param $messages mixed
     */
    public function __construct($messages)
    {
        $this->messages = $messages ;
        $this->email = (isset($messages['from']) ? $messages['from'] : config('mail.from.address'));
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email, "Messages")
            ->subject('Subject: '.$this->messages['subject'])
            ->view('extras::messages.email');
    }


}
