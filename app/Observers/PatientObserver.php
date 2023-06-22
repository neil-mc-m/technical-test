<?php

namespace App\Observers;

use App\Models\Patient;
use Illuminate\Support\Facades\Log;

class PatientObserver
{
    public bool $afterCommit = true;

    /**
     * Handle the Patient "created" event.
     */
    public function created(Patient $patient): void
    {
        Log::info(sprintf('new patient created: %s', $patient->name));
    }

    /**
     * Handle the Patient "updated" event.
     */
    public function updated(Patient $patient): void
    {
        Log::info(sprintf('patient updated: %s', $patient->name));
    }

    /**
     * Handle the Patient "deleted" event.
     */
    public function deleted(Patient $patient): void
    {
        Log::info(sprintf('patient deleted: %s', $patient->name));
    }

    /**
     * Handle the Patient "restored" event.
     */
    public function restored(Patient $patient): void
    {
        //
    }

    /**
     * Handle the Patient "force deleted" event.
     */
    public function forceDeleted(Patient $patient): void
    {
        //
    }
}
