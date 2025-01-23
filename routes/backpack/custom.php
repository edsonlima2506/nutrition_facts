<?php

use App\Http\Controllers\Admin\CompanyCrudController;
use App\Http\Controllers\Admin\IngredientCrudController;
use App\Http\Controllers\Admin\IngredientSystemCrudController;
use App\Http\Controllers\Admin\OrderCrudController;
use App\Http\Controllers\Admin\RecipeCategoryCrudController;
use App\Http\Controllers\Admin\RecipeCrudController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
], function () {
    Route::post('/set-language', [LanguageController::class, 'setLanguage'])->name('set.language');

    Route::group([
        'prefix' => 'company'
    ], function() {
        Route::crud('/', CompanyCrudController::class);
        Route::get('/my-company/{company}', [CompanyCrudController::class, 'myCompany'])->name('company.my_company');
        Route::post('/my-company/{company}', [CompanyCrudController::class, 'myCompanyUpdate'])->name('company.my_company.update');
    });


    // Ingredients
    // Route::crud('ingredient', IngredientCrudController::class);
    Route::group([
        'prefix' => 'ingredient'
    ], function() {
        Route::crud('/', IngredientCrudController::class);
        Route::get('/search', [IngredientCrudController::class, 'searchIngredients'])->name('ingredient.searchIngredients');
    });

    Route::crud('system/ingredients', IngredientSystemCrudController::class);

    Route::crud('recipe-category', RecipeCategoryCrudController::class);
    Route::crud('recipe', RecipeCrudController::class);
    Route::crud('order', OrderCrudController::class);
}); // this should be the absolute last line of this file