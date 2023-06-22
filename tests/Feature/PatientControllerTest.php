<?php

namespace Tests\Feature;

use App\Models\Patient;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\CreatesApplication;
use Tests\TestCase;

class PatientControllerTest extends TestCase
{
    use RefreshDatabase;
    use CreatesApplication;

    public function test_sends_message_for_patient_success()
    {
        Patient::factory()->create();
        $response = $this->postJson('/api/patient/1/sms', ['message' => 'success']);
        $response->assertStatus(200);
    }

    public function test_sends_message_for_patient_error()
    {
        Patient::factory()->create();
        $response = $this->postJson('/api/patient/2/sms', ['message' => 'error']);
        $response->assertStatus(422);
    }
}
