<?php

namespace Tests\Unit;

use App\Dtos\Submission\SubmissionStoreDTO;
use App\Repositories\Submission\SubmissionRepository;
use App\Services\SubmissionService;
use PHPUnit\Framework\TestCase;

class SubmissionTest extends TestCase
{
    protected SubmissionService $service;
    protected SubmissionRepository $submissionRepository;

    public function setUp(): void
    {
        parent::setUp();

        $this->submissionRepository = new SubmissionRepository();
        $this->service = new SubmissionService($this->submissionRepository);
    }

    public function test_example(): void
    {
        $dto = new SubmissionStoreDTO('name', 'email', 'message');
        $this->assertNull($this->submissionRepository->store($dto));
    }
}
