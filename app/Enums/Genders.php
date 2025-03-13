<?php

namespace App\Enums;

use Illuminate\Contracts\Translation\Translator;

enum Genders: string
{
    case MALE = 'male';
    case FEMALE = 'female';
    case UNKNOWN = 'unknown';

    public function label(): string
    {
        return match ($this) {
            self::MALE => __('Masculine'),
            self::FEMALE => __('Feminine'),
            self::UNKNOWN => __('unknown'),
        };
    }
}
