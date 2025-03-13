<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $fillable = [
        'name',
        'description',
        'manufacturer',
        'doses_required',
        'vaccination_period',
        'vaccination_interval',
        'status',
    ];
}
