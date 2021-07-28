<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuizResource;
use App\Models\Quiz;

final class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return QuizResource
     */
    public function index(): QuizResource
    {
        return new QuizResource(Quiz::all());
    }
}
