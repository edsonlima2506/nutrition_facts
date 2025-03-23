<?php

namespace App\Http\Controllers\Admin;

use App\Enum\IngredientTable;
use App\Traits\CheckCompany;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class IngredientSystemCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class IngredientSystemCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    use CheckCompany;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Ingredient::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/system/ingredients');
        CRUD::setEntityNameStrings(trans('crud.ingredient.singular'), trans('crud.ingredient.plural'));
        
        CRUD::setShowView(backpack_view('base.ingredient.crud.ingredient_show'));

        $this->crud->addClause('where', 'company_id', null);
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name'      => 'image',
            'label'     => '',
            'type'      => 'image',
            'orderable' =>  false,
            'prefix'    => 'storage/',
            'height'    => '50px',
            'width'     => '50px',
            'radius'    => '50%'
        ]);

        CRUD::column('name')->label(trans('crud.ingredient.fields.name'));
        CRUD::addColumn([
            'name'  =>  'table',
            'label' =>  trans('crud.ingredient.steps.info.table'),
            'type'  =>  'closure',
            'function'  =>  function($entry) {
                return ($entry->table) ? IngredientTable::from($entry->table)->getLabel() : '-';
            }
        ]);

        $this->setupFilters();
    }

    protected function setupFilters()
    {
        $this->crud->addFilter(
            [
                'type'  => 'text',
                'name'  => 'id',
                'label' => trans('crud.ingredient.filters.id')
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
                'label' => trans('crud.ingredient.filters.name')
            ], 
            false, 
            function($value) {
                $this->crud->addClause('where', 'name', 'LIKE', "%$value%");
            }
        );
    }
}
