<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     */
    public function show(string $id): JsonResponse
    {
    }
}
