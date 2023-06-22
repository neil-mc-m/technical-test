<?php

namespace App\Http\Controllers;

use App\Repository\PatientRepository;
use App\Service\SmsService;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __construct(private readonly PatientRepository $patientRepository) {}

    public function sendMessage(Request $request, SmsService $smsService, int $id): void
    {
        $patient = $this->patientRepository->findById($id);
    }
}
