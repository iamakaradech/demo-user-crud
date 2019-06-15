<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function apiSuccess($payload)
    {
        return $this->apiResponse($payload, 200);
    }

    public function apiError($payload)
    {
        return $this->apiResponse($payload, 500);
    }

    public function apiResponse($payload, $statusCode)
    {
        return response()->json([
            'data' => $payload,
        ])->setStatusCode($statusCode);
    }
}
