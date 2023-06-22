<?php

namespace App\Contracts;

interface SmsClientInterface
{
    public function send(string $message, string $toNumber): string ;
}
