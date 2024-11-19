<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static self BRAZILIAN()
 * @method static self EUROPEAN()
 * @method static self NORTH_AMERICAN()
 *
 */
class CompanyPattern extends Enum
{
    private const BRAZILIAN = 1;
    private const EUROPEAN = 2;
    private const NORTH_AMERICAN = 3;

    /**
     * Display values for the enum.
     */
    public static function labels(): array
    {
        return [
            self::BRAZILIAN => trans('enum.companyPattern.brazilian'),
            self::EUROPEAN => trans('enum.companyPattern.european'),
            self::NORTH_AMERICAN => trans('enum.companyPattern.north_american'),
        ];
    }

    public function getLabel(): string
    {
        return self::labels()[$this->value];
    }
}
