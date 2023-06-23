<?php

namespace App\Http\Controllers;

use App\Repository\PatientRepository;
use App\Service\SmsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PatientController extends Controller
{
    public function __construct(
        private readonly PatientRepository $patientRepository,
        private readonly SmsService $smsService
    ) {}

    public function sendMessage(Request $request, int $id): JsonResponse
    {
        $message = $request->post('message');
        $patient = $this->patientRepository->findById($id);

        return $this->smsService->send($message, $patient->phone);
    }
}
