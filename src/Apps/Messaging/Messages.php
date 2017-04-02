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
    private $title;

    /**
     * Create a new message instance.
     *
     * @param $messages mixed
     * @param string $title
     */
    public function __construct($messages, $title = "System Message")
    {
        $this->messages = $messages ;
        $this->email = config('mail.from.address');
        $this->$this->title = $$title ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email, $this->title)
            ->subject('Subject: '.$this->messages['subject'])
            ->view('extras::messages.email');
    }


}
