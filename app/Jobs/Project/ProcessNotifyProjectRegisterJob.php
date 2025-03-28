<?php

namespace App\Jobs\Project;

use App\Mail\Project\ProcessNotifyProjectRegisterEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessNotifyProjectRegisterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $project;
    public function __construct($project)
    {
        Log::info("[init] ProcessNotifyProjectRegisterJob");
        $this->project = $project;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{
            \Mail::to('codethue94@gmail.com')->send(new ProcessNotifyProjectRegisterEmail($this->project));
        }catch (\Exception $exception)
        {
            Log::error("[ProcessNotifyProjectRegisterJob: ]". $exception->getMessage());
        }
    }
}
