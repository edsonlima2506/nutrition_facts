<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IngredientRequest;
use App\Models\Ingredient;
use App\Services\IngredientService;
use App\Traits\CheckCompany;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Exception;
use Prologue\Alerts\Facades\Alert;

/**
 * Class IngredientCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class IngredientCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation {
        store as traitStore;
    }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    use CheckCompany;

    /**
     * @var \App\Services\IngredientService
     */
    protected $ingredientService;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Ingredient::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/ingredient');
        CRUD::setEntityNameStrings(trans('crud.ingredient.singular'), trans('crud.ingredient.plural'));
        
        CRUD::setCreateView(backpack_view('base.ingredient.crud.create'));
        CRUD::setEditView(backpack_view('base.ingredient.crud.create'));

        $this->ingredientService = resolve(IngredientService::class);
        
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
        CRUD::column('name')->label(trans('crud.ingredient.fields.name'));
        CRUD::column('manufacturer')->label(trans('crud.ingredient.fields.manufacturer'));
        CRUD::column('supplier')->label(trans('crud.ingredient.fields.supplier'));

        CRUD::addColumn([
            'name'  =>  'price',
            'label' =>  trans('crud.ingredient.fields.price'),
            'type'  =>  'closure',
            'function'  =>  function($entry) {
                return '$' . $entry->unit_price;
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
                'label' => 'Nome'
            ], 
            false, 
            function($value) {
                $this->crud->addClause('where', 'name', 'LIKE', "%$value%");
            }
        );

        $this->crud->addFilter(
            [
                'type'  => 'text',
                'name'  => 'manufacturer',
                'label' => trans('crud.ingredient.filters.manufacturer')
            ], 
            false, 
            function($value) {
                $this->crud->addClause('where', 'manufacturer', 'LIKE', "%$value%");
            }
        );

        $this->crud->addFilter(
            [
                'type'  => 'text',
                'name'  => 'supplier',
                'label' => trans('crud.ingredient.filters.supplier')
            ], 
            false, 
            function($value) {
                $this->crud->addClause('where', 'supplier', 'LIKE', "%$value%");
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
        CRUD::setValidation(IngredientRequest::class);

        CRUD::field('name');
        CRUD::field('manufacturer');
        CRUD::field('nutritional_information');
        CRUD::field('seccondary_ingredients');
        CRUD::field('allergens');
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

        $this->setupListOperation();
    }

    public function store(IngredientRequest $request)
    {
        try {
            $requestData = $request->all();

            $user = backpack_user();

            $this->ingredientService->storeIngredient($requestData, $user);

            Alert::success(trans('backpack::crud.insert_success'))->flash();

            return redirect(backpack_url('ingredient'));
        } catch (Exception $exception) {
            report($exception);

            Alert::error(trans('backpack::base.error_saving'))->flash();

            return redirect()->back()->withInput();
        }
    }
}
