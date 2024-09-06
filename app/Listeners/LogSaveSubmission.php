<?php

namespace App\Listeners;

use App\Events\SubmissionSaved;
use Illuminate\Support\Facades\Log;

class LogSaveSubmission
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubmissionSaved $event): void
    {
        $name = $event->submission->getName();
        $email = $event->submission->getEmail();
        Log::channel('info')->info("Submission for name '$name' and email '$email' successfully saved ");
    }
}
