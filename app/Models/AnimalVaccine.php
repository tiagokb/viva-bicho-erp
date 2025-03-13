<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnimalVaccine extends Model
{
    protected $fillable = [
        'animal_id',
        'vaccine_id',
        'dose_number',
        'applied_at',
        'next_dose_at',
        'administered_by',
        'notes',
    ];

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }

    protected function casts()
    {
        return [
            'applied_at' => 'date',
            'next_dose_at' => 'date',
        ];
    }
}
