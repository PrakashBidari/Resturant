<?php

namespace App\Jobs;

use App\Models\User;
use App\Mail\ContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendContactEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $contactMail;

    public function __construct($contactMail)
    {
        $this->contactMail = $contactMail;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $users = User::all();
        Mail::to($users)->send(new ContactMail($this->contactMail));
    }
}
