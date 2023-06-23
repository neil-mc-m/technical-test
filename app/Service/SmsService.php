<?php

namespace App\Service;

use App\Contracts\SmsClientInterface;
use Illuminate\Http\JsonResponse;

readonly class SmsService
{
    public function __construct(private SmsClientInterface $client) {}

    public function send(string $message, string $toNumber): JsonResponse
    {
        return $this->client->send($message, $toNumber);
    }
}
