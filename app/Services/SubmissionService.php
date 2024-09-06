<?php

namespace App\Services;

use App\Dtos\Submission\SubmissionStoreDTO;
use App\Jobs\SaveSubmission;
use App\Repositories\Submission\SubmissionRepository;
use Illuminate\Database\Eloquent\Collection;

class SubmissionService
{
    public function __construct(
        protected SubmissionRepository $submissionRepository,
    ) {
    }

    public function getAll(): Collection
    {
        return $this->submissionRepository->getAll();
    }

    public function store(SubmissionStoreDTO $submissionData): void
    {
        SaveSubmission::dispatch($submissionData);
    }
}
