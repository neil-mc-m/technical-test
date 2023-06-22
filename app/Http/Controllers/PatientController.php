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
        if ($message === 'success') {
            return response()->json([
                'status' => $this->smsService->send($message, $patient->phone),
                'patient' => $patient->phone
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => sprintf('patient with phone number %d doesnt exist', $patient->phone)
        ], 422);
    }
}
