<?php

namespace App\Http\Client;

use App\Contracts\SmsClientInterface;
use Illuminate\Http\JsonResponse;

class MyFakeTwilioClient implements SmsClientInterface
{
    public function __construct(
        private int    $id,
        private string $token
    ) {}

    public function send($message, $toNumber): JsonResponse
    {
        if ($message === 'success') {
            return new JsonResponse(['status' => 'success']);
        }

        return new JsonResponse(['status' => 'error', 'error' => 'error message'], 422);
    }
}
