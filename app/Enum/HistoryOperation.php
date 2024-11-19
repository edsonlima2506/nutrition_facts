<?php

namespace App\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static self UPDATE()
 * @method static self CREATE()
 * @method static self DELETE()
 *
 */
class HistoryOperation extends Enum
{
    private const UPDATE = 'update';
    private const CREATE = 'create';
    private const DELETE = 'delete';

    /**
     * Display values for the enum.
     */
    public static function labels(): array
    {
        return [
            self::UPDATE => trans('history.operations.update'),
            self::CREATE => trans('history.operations.create'),
            self::DELETE => trans('history.operations.delete'),
        ];
    }

    public function getLabel(): string
    {
        return self::labels()[$this->value];
    }
}
