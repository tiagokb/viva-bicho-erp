<?php

namespace App\Enums;

use Illuminate\Contracts\Translation\Translator;

enum DateInterval: string
{
    case DAYS = 'days';
    case MONTHS = 'months';
    case YEARS = 'years';

    public function label(): string
    {
        return match ($this) {
            self::DAYS => __('days'),
            self::MONTHS => __('months'),
            self::YEARS => __('years'),
        };
    }
}
