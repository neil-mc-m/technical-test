<?php

namespace App\Repository;

use App\Models\Patient;

class PatientRepository
{
    public function findById($id): ?Patient
    {
        return Patient::find($id);
    }
}
