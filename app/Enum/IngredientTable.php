<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

class IngredientTable extends Enum
{
    private const IBGE = 'ibge';
    private const TACO = 'taco';
    private const TCA = 'tca';
    private const CIQUAL = 'ciqual';
    private const EFSA = 'efsa';
    private const USDA = 'usda';
    private const FAO = 'fao';

      /**
     * Display values for the enum.
     */
    public static function labels(): array
    {
        return [
            self::IBGE => trans('enum.food_table.ibge'),
            self::TACO => trans('enum.food_table.taco'),
            self::TCA => trans('enum.food_table.tca'),
            self::CIQUAL => trans('enum.food_table.ciqual'),
            self::EFSA => trans('enum.food_table.efsa'),
            self::USDA => trans('enum.food_table.usda'),
            self::FAO => trans('enum.food_table.fao'),
        ];
    }

    public function getLabel(): string
    {
        return self::labels()[$this->value];
    }
}