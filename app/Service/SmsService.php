<?php

namespace App\Service;

use App\Contracts\SmsClientInterface;

readonly class SmsService
{
    public function __construct(private SmsClientInterface $client) {}

    public function send(string $message, string $toNumber): string
    {
        $this->client->send($message, $toNumber);

        return 'success';
    }
}
