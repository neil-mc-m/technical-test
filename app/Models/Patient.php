<?php

namespace App\Models;

use Database\Factories\PatientFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return PatientFactory::new();
    }

    public function record(): HasOne
    {
        return $this->hasOne(Record::class);
    }
}
