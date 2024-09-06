<?php

namespace App\Repositories\Submission;

use App\Dtos\Submission\SubmissionStoreDTO;
use App\Models\Submission;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class SubmissionRepository
{
    public function getAll(): Collection
    {
        return Submission::all();
    }

    public function store(SubmissionStoreDTO $data): Submission
    {
        return Submission::create([
            'name'       => $data->getName(),
            'email'      => $data->getEmail(),
            'message'    => $data->getMessage(),
            'created_at' => Carbon::now()->timezone('Europe/Kyiv'),
        ]);
    }
}

