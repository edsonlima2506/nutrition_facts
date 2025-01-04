<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

class WeightUnit extends Enum
{
    private const GRAMS = 'grams';
    private const KILOGRAMS = 'kilograms';

      /**
     * Display values for the enum.
     */
    public static function labels(): array
    {
        return [
            self::GRAMS => trans('enum.weight_unit.grams'),
            self::KILOGRAMS => trans('enum.weight_unit.kilograms'),
        ];
    }

    public function getLabel(): string
    {
        return self::labels()[$this->value];
    }
}