<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class BookTicketMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $transaction;
    public function __construct($transaction)
    {
        Log::info("init Send email BookTicketMail");
        $this->transaction = $transaction;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        Log::info("Send email BookTicket");
        return $this->view('emails.book_ticket')
            ->subject('[Tìm dev code đồ án]')
            ->with([
                'transaction' => $this->transaction
            ]);
    }
}
