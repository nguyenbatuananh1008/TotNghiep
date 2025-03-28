<?php

namespace App\Mail\Project;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class ProcessNotifyProjectRegisterEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $project;
    public function __construct($project)
    {
        Log::info("[init] -- ProcessNotifyProjectRegisterEmail");
        $this->project = $project;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $link = route('get.project.detail',['slug' => $this->project->prj_slug,'id' => $this->project->id]);
        Log::info("[Send email] -- ProcessNotifyProjectRegisterEmail");
        return $this->view('emails.demo')
            ->with([
                'link' => $link,
            ]);
    }
}
