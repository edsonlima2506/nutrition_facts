<?php

namespace App\Repositories;

use App\Models\Ingredient;
use App\Models\User;
use App\Traits\CrudFieldsTrait;

class IngredientRepository
{
    use CrudFieldsTrait;

    /**
     * @return array
     */
    public static function getAllergensOptions(): array
    {
        return [
            'celery'                            =>  trans('allergens.celery'),
            'albumin'                           =>  trans('allergens.albumin'),
            'almonds'                           =>  trans('allergens.almonds'),
            'peanuts'                           =>  trans('allergens.peanuts'),
            'gm_corn_starch'                    =>  trans('allergens.gm_corn_starch'),
            'oats'                              =>  trans('allergens.oats'),
            'hazelnuts'                         =>  trans('allergens.hazelnuts'),
            'shrimp'                            =>  trans('allergens.shrimp'),
            'crab'                              =>  trans('allergens.crab'),
            'caseinate'                         =>  trans('allergens.caseinate'),
            'nuts'                              =>  trans('allergens.nuts'),
            'cashew_nuts'                       =>  trans('allergens.cashew_nuts'),
            'brazil_nuts'                       =>  trans('allergens.brazil_nuts'),
            'rye'                               =>  trans('allergens.rye'),
            'barley'                            =>  trans('allergens.barley'),
            'crustaceans_shrimp_and_lobster'    =>  trans('allergens.crustaceans_shrimp_and_lobster'),
            'crustaceans_shrimp'                =>  trans('allergens.crustaceans_shrimp'),
            'crustaceans_crab'                  =>  trans('allergens.crustaceans_crab'),
            'crustaceans_lobster'               =>  trans('allergens.crustaceans_lobster'),
            'sulphur_dioxide'                   =>  trans('allergens.sulphur_dioxide'),
            'spices'                            =>  trans('allergens.spices'),
            'spelt'                             =>  trans('allergens.spelt'),
            'phenylalanine'                     =>  trans('allergens.phenylalanine'),
            'royal_jelly'                       =>  trans('allergens.royal_jelly'),
            'sesame_seeds'                      =>  trans('allergens.sesame_seeds'),
            'sunflower'                         =>  trans('allergens.sunflower'),
            'gluten'                            =>  trans('allergens.gluten'),
            'kamut'                             =>  trans('allergens.kamut'),
            'lactose'                           =>  trans('allergens.lactose'),
            'latex'                             =>  trans('allergens.latex'),
            'milk'                              =>  trans('allergens.milk'),
            'macadamia_nuts'                    =>  trans('allergens.macadamia_nuts'),
            'cassava'                           =>  trans('allergens.cassava'),
            'gm_corn_and_soy_oil'               =>  trans('allergens.gm_corn_and_soy_oil'),
            'gm_corn_and_soy'                   =>  trans('allergens.gm_corn_and_soy'),
            'gm_corn'                           =>  trans('allergens.gm_corn'),
            'molluscs'                          =>  trans('allergens.molluscs'),
            'mustard'                           =>  trans('allergens.mustard'),
            'walnuts'                           =>  trans('allergens.walnuts'),
            'queensland_walnuts'                =>  trans('allergens.queensland_walnuts'),
            'macadamia_walnuts'                 =>  trans('allergens.macadamia_walnuts'),
            'pecan_walnuts'                     =>  trans('allergens.pecan_walnuts'),
            'soy_oil'                           =>  trans('allergens.soy_oil'),
            'eggs'                              =>  trans('allergens.eggs'),
            'pecans'                            =>  trans('allergens.pecans'),
            'fish'                              =>  trans('allergens.fish'),
            'pine_nuts'                         =>  trans('allergens.pine_nuts'),
            'pistachios'                        =>  trans('allergens.pistachios'),
            'pistachios'                        =>  trans('allergens.pistachios'),
            'pollen'                            =>  trans('allergens.pollen'),
            'propolis'                          =>  trans('allergens.propolis'),
            'soy'                               =>  trans('allergens.soy'),
            'gm_soy'                            =>  trans('allergens.gm_soy'),
            'sulphites'                         =>  trans('allergens.sulphites'),
            'lupine'                            =>  trans('allergens.lupine'),
            'wheat'                             =>  trans('allergens.wheat'),
            'triticale'                         =>  trans('allergens.triticale'),
            'wine'                              =>  trans('allergens.wine')
        ];
    }

    /**
     * @param array $requestData
     * @param User $user
     * 
     * @return array
     */
    public function mapIngredientData(array $data = [], User $user): array
    {
        $data['name'] = $data['ingredient_name'];
        $data['manufacturer'] = $data['ingredient_manufacturer'];
        $data['supplier'] = $data['ingredient_supplier'];
        $data['company_id'] = $user->company_id;
        $data['ingredient_allergens_has_derivatives'] = isset($data['ingredient_allergens_has_derivatives']) ? true : false;
        $data['unit_price'] = !empty($data['unit_price']) ? str_replace(',', '.', $data['unit_price']) : null;
        $data['price_kilo'] = !empty($data['price_kilo']) ? str_replace(',', '.', $data['price_kilo']) : null;
        $data['correction_factor'] = !empty($data['correction_factor']) ? str_replace(',', '.', $data['correction_factor']) : null;
        $data['revenue'] = !empty($data['revenue']) ? str_replace(',', '.', $data['revenue']) : null;
        $data['nutritional_values'] = $this->extractNutritionalValues($data);
        $data['closed_storage_place'] = $this->processJsonString(data_get($data, 'closed_storage_place', []));
        $data['closed_storage_temperature'] = $this->processJsonString(data_get($data, 'closed_storage_temperature', []));
        $data['opened_storage_place'] = $this->processJsonString(data_get($data, 'opened_storage_place', []));
        $data['opened_storage_temperature'] = $this->processJsonString(data_get($data, 'opened_storage_temperature', []));

        return $data;
    }

    /**
     * @param array $data
     * 
     * @return array
     */
    private function extractNutritionalValues(array &$data): array
    {
        $nutritionalValues = [];
        foreach ($data as $key => $value) {
            if (str_starts_with($key, 'nutritional_')) {
                $nutritionalKey = str_replace('nutritional_', '', $key);
                
                if (is_string($value) && str_contains($value, ',')) {
                    $value = str_replace(',', '.', $value);
                }
                $nutritionalValues[$nutritionalKey] = is_numeric($value) ? (float) $value : $value;
                unset($data[$key]);
            }
        }
    

        return $nutritionalValues;
    }

    /**
     * @param array $data
     * 
     * @return Ingredient
     */
    public function storeIngredient(array $data): Ingredient
    {
        return Ingredient::create($data);
    }
    /**
     * @param Ingredient $ingredient
     * @param array $data
     * 
     * @return void
     */
    public function updateIngredient(Ingredient $ingredient, array $data): void
    {
        $ingredient->update($data);
    }

    public function searchLimit(string $search, int $limit, User $user)
    {
        if(is_null($user->company_id)){
            return Ingredient::where(function($query) use ($user, $search) {
                $query->where('company_id', $user->company_id)
                    ->orWhereNull('company_id');
            })
            ->where('name', 'like', '%' . $search . '%')
            ->limit(10)
            ->get();
        }else{
            return Ingredient::where('name', 'like', '%' . $search . '%')
            ->limit($limit)
            ->get();
        }
    }
}