<?php

namespace Tests\Unit;

use App\Http\Client\MyFakeTwilioClient;
use App\Service\SmsService;
use Tests\TestCase;

class SmsServiceTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->client = $this->app->make(MyFakeTwilioClient::class, ['id' => 123, 'token' => '12331']);
        $this->smsService = $this->app->make(SmsService::class, [$this->client]);
    }

    public function test_response_from_client_is_success(): void
    {
        $response = $this->smsService->send('success', '08612345678');

        $this->assertSame('{"status":"success"}', $response->getContent());
    }

    public function test_response_from_client_when_is_error(): void
    {
        $response = $this->smsService->send('anyothermessage', '08612345678');

        $this->assertSame('{"status":"error","error":"error message"}', $response->getContent());
    }
}
