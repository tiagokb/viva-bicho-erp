<?php

namespace App\Enums;

use Illuminate\Contracts\Translation\Translator;

enum AnimalStatus: string
{

    case AVAILABLE = 'available';
    case ADOPTED = 'adopted';
    case UNDER_TREATMENT = 'under_treatment';
    case DECEASED = 'deceased';

    public function label(): string
    {
        return match ($this) {
            self::AVAILABLE => __('Available'),
            self::ADOPTED => __('Adopted'),
            self::UNDER_TREATMENT => __('Under treatment'),
            self::DECEASED => __('Deceased'),
        };
    }
}
