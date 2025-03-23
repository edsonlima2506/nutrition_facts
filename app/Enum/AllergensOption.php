<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static self CONTAIN()
 * @method static self DOESNT_CONTAIN()
 * @method static self UNDECLARED()
 * @method static self LOW_CONTENT()
 *
 */
class CompanyPattern extends Enum
{
    private const CONTAIN = 'contain';
    private const DOESNT_CONTAIN = 'doesnt_contain';
    private const UNDECLARED = 'undeclared';
    private const LOW_CONTENT = 'low_content';

    /**
     * Display values for the enum.
     */
    public static function labels(): array
    {
        return [
            self::CONTAIN => trans('enum.allergensOption.options.contain'),
            self::DOESNT_CONTAIN => trans('enum.allergensOption.options.doesnt_contain'),
            self::UNDECLARED => trans('enum.allergensOption.options.undeclared'),
            self::LOW_CONTENT => trans('enum.allergensOption.options.low_content'),
        ];
    }

    public function getLabel(): string
    {
        return self::labels()[$this->value];
    }
}
