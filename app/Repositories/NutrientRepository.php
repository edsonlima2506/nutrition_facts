<?php

namespace App\Repositories;

use App\Models\Nutrient;

class NutrientRepository
{
    /**
     * @return array
     */
    public static function getMandatoryNutrients(): array
    {
        $nutrients = Nutrient::mandatory()->get();

        $result = $nutrients->map(function($nutrient) {
            return [
                'name'          => $nutrient->name,
                'label'         => trans("nutritional.{$nutrient->name}"),
                'measure_name'  => $nutrient->measure,
                'measure'       => trans("nutritional.measures.{$nutrient->measure}"),
            ];
        })->toArray();

        return $result;
    }

    /**
     * @return array
     */
    public static function getOptionalNutrients(): array
    {
        $nutrients = Nutrient::optional()->get();

        $result = $nutrients->map(function($nutrient) {
            return [
                'name'          => $nutrient->name,
                'label'         => trans("nutritional.optional.{$nutrient->name}"),
                'measure_name'  => $nutrient->measure,
                'measure'       => trans("nutritional.measures.{$nutrient->measure}")
            ];
        })->toArray();

        return $result;
    }
}