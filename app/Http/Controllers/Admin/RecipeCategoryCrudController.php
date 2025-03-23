<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RecipeCategoryRequest;
use App\Traits\CheckCompany;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RecipeCategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RecipeCategoryCrudController extends CrudController
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
        CRUD::setModel(\App\Models\RecipeCategory::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/recipe-category');
        CRUD::setEntityNameStrings(trans('crud.recipe.recipeCategory.singular'), trans('crud.recipe.recipeCategory.plural'));
        CRUD::addClause('with', 'company');

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
        
        CRUD::column('id')->label('ID');
        CRUD::column('name')->label(trans('crud.recipe.fields.name'));
        CRUD::column('description')->label(trans('crud.recipe.fields.description'));
        CRUD::column('color')
         ->label(trans('crud.recipe.fields.color'))
         ->type('closure')
         ->function(function($entry) {
             return '<span class="badge" style="background-color:' . $entry->color . '; color: white; padding: 5px 10px; border-radius: 20px;">' . $entry->color . '</span>';
         });

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
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(RecipeCategoryRequest::class);

        CRUD::field('name')->label('Nome');
        CRUD::field('descrition')->type('textarea')->label('Descrição');
        CRUD::field('color')->type('color')->label('Cor');
        
        if (!is_null(backpack_user()->company_id)) {
            CRUD::field('company_id')
                ->type('hidden')
                ->value(backpack_user()->company_id);
        }

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
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

    protected function setupShowOperation()
    {
        $entry = $this->crud->getCurrentEntry();
        $this->checkUserCompany($entry);

        CRUD::column('name')->label('Nome');
        CRUD::column('description')->label('Descrição');
        CRUD::column('color')->label('Cor');
    
        if (is_null(backpack_user()->company_id)) {
            // Usuário super admin - exibe o nome da empresa
            CRUD::addColumn([
                'name' => 'company.name', // Nome do relacionamento no modelo
                'label' => 'Empresa',
                'type' => 'text',
            ]);
        }
    }
}
