<?php

namespace App\Services;

use App\Models\Ingredient;
use App\Models\User;
use App\Repositories\IngredientRepository;

class IngredientService 
{
    /**
     * @var \App\Repositories\IngredientRepository
     */
    protected $ingredientRepository;

    public function __construct(IngredientRepository $ingredientRepository)
    {
        $this->ingredientRepository = $ingredientRepository;        
    }
    /**
     * @param array $requestData
     * @param User $user
     * 
     * @return Ingredient
     */
    public function storeIngredient(array $requestData, User $user): Ingredient
    {
        $ingredientData = $this->ingredientRepository->mapIngredientData($requestData, $user);

        return $this->ingredientRepository->storeIngredient($ingredientData);
    }
}