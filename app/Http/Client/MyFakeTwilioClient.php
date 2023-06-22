<?php

namespace App\Http\Client;

use App\Contracts\SmsClientInterface;
use Illuminate\Http\JsonResponse;

readonly class MyFakeTwilioClient implements SmsClientInterface
{
    public function __construct(
        private int    $id,
        private string $token
    ) {}

    public function send($message, $toNumber): string
    {
        return new JsonResponse(['status' => 'success']);
    }
}
