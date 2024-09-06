<?php

use App\Http\Controllers\SubmissionController;
use Illuminate\Support\Facades\Route;

Route::post('submission', [SubmissionController::class, 'store'])
->name('submission.store');
Route::get('submission', [SubmissionController::class, 'index'])
    ->name('submission.index');
