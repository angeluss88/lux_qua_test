<?php

namespace App\Jobs;

use App\Dtos\Submission\SubmissionStoreDTO;
use App\Events\SubmissionSaved;
use App\Repositories\Submission\SubmissionRepository;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;
use Throwable;

class SaveSubmission implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public SubmissionStoreDTO $submission,
    ) {}

    /**
     * Execute the job.
     */
    public function handle(SubmissionRepository $submissionRepository): void
    {
        $submissionRepository->store($this->submission);
        SubmissionSaved::dispatch($this->submission);
    }

    /**
     * Handle a job failure.
     */
    public function failed(?Throwable $exception): void
    {
        $name = $this->submission->getName();
        $email = $this->submission->getEmail();
        $errorMsg = $exception->getMessage();
        Log::info("Saving submission for name '$name' and email '$email' failed with message: $errorMsg");
    }
}
