<?php

namespace App\Http\Controllers\Admin;

use App\Enum\PortionUnit;
use App\Enum\WeightUnit;
use App\Http\Requests\RecipeRequest;
use App\Models\RecipeCategory;
use App\Traits\CheckCompany;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Lang;

/**
 * Class RecipeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RecipeCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    use CheckCompany;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Recipe::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/recipe');
        CRUD::setEntityNameStrings(trans('crud.recipe.singular'), trans('crud.recipe.plural'));
        CRUD::addClause('with', ['company', 'recipe_category']);

        CRUD::setCreateView(backpack_view('base.recipe.crud.create'));
        CRUD::setEditView(backpack_view('base.recipe.crud.create'));

        $categories = RecipeCategory::where('company_id', backpack_user()->company_id)->pluck('name', 'id');
        $portionUnits = PortionUnit::labels();
        $weightUnits = WeightUnit::labels();

        view()->share([
            'categories'    => $categories,
            'portionUnits'  => $portionUnits,
            'weightUnits'   => $weightUnits
        ]);

        $this->setCompanyVisibility();
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('name')->label(trans('crud.recipe.fields.name'));
        CRUD::column('recipe_category_id')
        ->label(trans('crud.recipe.fields.recipeCategory'))
        ->type('select')
        ->entity('recipe_category') 
        ->attribute('name')
        ->wrapper(function ($field) {
            $color = $field->entry->recipe_category->color ?? '#FFFFFF';
            return '<span class="badge" style="background-color: ' . $color . ';">' . $field->entry->recipe_category->name . '</span>';
        });
        CRUD::column('description')->label(trans('crud.recipe.fields.description'));
        CRUD::column('created_at')->label(trans('crud.recipe.fields.created_at'));

        $this->setupFilters();
       
    }

    protected function setupFilters()
    {
        $this->crud->addFilter(
            [
                'type'  => 'text',
                'name'  => 'id',
                'label' => trans('crud.recipe.filters.id')
            ], 
            false, 
            function($value) {
                $this->crud->addClause('where', 'id', $value);
            }
        );


        $this->crud->addFilter(
            [
                'type'  => 'text',
                'name'  => 'name',
                'label' => trans('crud.recipe.filters.name')
            ], 
            false, 
            function($value) {
                $this->crud->addClause('where', 'name', 'LIKE', "%$value%");
            }
        );

        $this->crud->addFilter(
            [
                'type'  => 'text',
                'name'  => 'category_name',
                'label' => trans('crud.recipe.filters.category_name')
            ], 
            false, 
            function($value) {
                $this->crud->addClause('whereHas', 'recipe_category', function($query) use ($value) {
                    $query->where('name', 'LIKE', "%$value%");
                });
            }
        );
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(RecipeRequest::class);

        CRUD::field('name');
        CRUD::field('portions');
        CRUD::field('portion_unit');
        CRUD::field('preparation_time');
        CRUD::field('recipe_category_id');
        CRUD::field('weight_unit');
        CRUD::field('weight');
        CRUD::field('description');

        if (!is_null(backpack_user()->company_id)) {
            CRUD::field('company_id')
                ->type('hidden')
                ->value(backpack_user()->company_id);
        }
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
