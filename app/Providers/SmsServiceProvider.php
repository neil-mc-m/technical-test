<?php

namespace App\Providers;

use App\Http\Client\MyFakeTwilioClient;
use App\Service\SmsService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register(): void
    {
        $this->app->singleton(SmsService::class, function () {
            return new SmsService(new MyFakeTwilioClient(env('TWILIO_ID'), env('TWILIO_TOKEN')));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<int, string>
     */
    public function provides(): array
    {
        return [SmsService::class];
    }
}
