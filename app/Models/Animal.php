<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'age',
        'race',
        'gender',
        'size',
        'behavior_details',
        'diseases',
        'disabilities',
        'special_care',
        'origin',
        'status',
        'entry_date',
        'chip_id',
        'castrated',
        'coat_color',
        'photo',
        'notes',
    ];

    protected function casts()
    {
        return [
            'entry_date' => 'date',
        ];
    }
}
