<?php

namespace App\Service;

class SmsService
{
    public function __construct(private readonly array $config) {}

    public function send(string $messasge, string $toNumber): bool
    {
        return $this->config['client']->send($messasge, $toNumber);
    }
}
