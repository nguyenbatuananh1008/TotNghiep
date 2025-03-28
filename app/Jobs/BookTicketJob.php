<?php

namespace App\Jobs;

use App\Mail\BookTicketMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class BookTicketJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $transaction;
    public function __construct($transaction)
    {
        Log::info("init BookTicketJob");
        $this->transaction = $transaction;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::info("handle BookTicketJob");
        try{
            \Mail::to($this->transaction->t_email)->send(new BookTicketMail($this->transaction));
        }catch (\Exception $exception)
        {
            Log::error("[BookTicketJob Error : ]". $exception->getMessage());
        }
    }
}
