<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

class PortionUnit extends Enum
{
    private const PORTIONS = 'portions';
    private const PEOPLE = 'people';
    private const UNITS = 'units';
    private const LITERS = 'liters';
    private const MILLILITERS = 'milliliters';
    private const GRAMS = 'grams';

     /**
     * Display values for the enum.
     */
    public static function labels(): array
    {
        return [
            self::PORTIONS => trans('enum.portion_unit.portions'),
            self::PEOPLE => trans('enum.portion_unit.people'),
            self::UNITS => trans('enum.portion_unit.units'),
            self::LITERS => trans('enum.portion_unit.liters'),
            self::MILLILITERS => trans('enum.portion_unit.milliliters'),
            self::GRAMS => trans('enum.portion_unit.grams'),

        ];
    }

    public function getLabel(): string
    {
        return self::labels()[$this->value];
    }

}