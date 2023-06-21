<?php

namespace App\Http\Controllers;

use App\Repository\PatientRepository;
use App\Service\SmsService;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function __invoke(Request $request, SmsService $smsService, PatientRepository $patientRepository, int $id): void
    {

    }
}
