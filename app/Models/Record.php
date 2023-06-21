<?php

namespace App\Models;

use Database\Factories\RecordFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends Model
{
    use HasFactory;

    protected static function newFactory(): Factory
    {
        return RecordFactory::new();
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Record::class);
    }
}
