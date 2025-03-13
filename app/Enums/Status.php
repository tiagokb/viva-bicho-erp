<?php

namespace App\Enums;

use Illuminate\Contracts\Translation\Translator;

enum Status: string
{

    case ACTIVE = 'active';
    case DISABLED = 'disabled';

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => __('Active'),
            self::DISABLED => __('Disabled'),
        };
    }
}
