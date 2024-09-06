<?php

namespace App\Http\Controllers;

use App\Dtos\Submission\SubmissionStoreDTO;
use App\Http\Requests\Submission\SubmissionStoreRequest;
use App\Services\SubmissionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class SubmissionController extends Controller
{
    public function __construct(
        protected SubmissionService $submissionService
    ) {
    }

    public function index(): JsonResponse
    {
        //@TODO add pagination
        //@TODO add returnDTO
        $data = $this->submissionService->getAll();
        return response()->json($data);
    }

    public function store(SubmissionStoreRequest $request): Response
    {
        $dto = new SubmissionStoreDTO(...$request->validated());
        $this->submissionService->store($dto);

        return response()->noContent(201);
    }
}
