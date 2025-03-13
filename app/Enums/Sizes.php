<?php

namespace App\Enums;

use Illuminate\Contracts\Translation\Translator;

enum Sizes: string
{

    case SMALL = 'small';
    case MEDIUM = 'medium';
    case LARGE = 'large';


    public function label(): string
    {
        return match ($this) {
            self::SMALL => __('Small'),
            self::MEDIUM => __('Medium'),
            self::LARGE => __('Large'),
        };
    }
}
