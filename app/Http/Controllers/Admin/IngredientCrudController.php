<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\IngredientRequest;
use App\Models\Ingredient;
use App\Services\IngredientService;
use App\Traits\CheckCompany;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation {
        update as traitUpdate;
    }
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
        
        CRUD::setCreateView(backpack_view('base.ingredient.crud.ingredient_crud'));
        CRUD::setEditView(backpack_view('base.ingredient.crud.ingredient_crud'));
        CRUD::setShowView(backpack_view('base.ingredient.crud.ingredient_show'));

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

        CRUD::column('name')->label('Nome');
        CRUD::column('manufacturer')->label(trans('crud.ingredient.fields.manufacturer'));
        CRUD::column('supplier')->label(trans('crud.ingredient.fields.supplier'));

        CRUD::addColumn([
            'name'  =>  'price',
            'label' =>  trans('crud.ingredient.fields.price'),
            'type'  =>  'closure',
            'function'  =>  function($entry) {
                return (!empty($entry->unit_price)) ? '$' . $entry->unit_price : '-';
            }
        ]);

        $this->setupFilters();
    }

    protected function setupFilters()
    {
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

            $ingredient = $this->ingredientService->storeIngredient($requestData, $user);

            if ($request->hasFile('ingredient_image')) {
                $path = $request->file('ingredient_image')->store('ingredients', 'public');
                $ingredient->image = $path;
            }
    
            $ingredient->save();

            Alert::success(trans('backpack::crud.insert_success'))->flash();

            return redirect(backpack_url('ingredient'));
        } catch (Exception $exception) {
            report($exception);

            Alert::error(trans('backpack::base.error_saving'))->flash();

            return redirect()->back()->withInput();
        }
    }

    public function searchIngredients(Request $request)
    {
        // Obtendo o termo de busca
        $search = $request->get('q', '');
        
        // Verifica o tipo de usuário logado
        $user = backpack_user();

        // Se for um superadmin, busca todos os ingredientes
        if ($user->hasRole('super_admin')) {
            $ingredients = $this->ingredientService->searchLimit($search, 10, $user);
        } else {
            // Se for uma empresa, busca os ingredientes que pertencem a ela
            $ingredients = $this->ingredientService->searchLimit($search, 10, $user);
        }

        // Formatar os dados para o Select2
        $results = $ingredients->map(function($ingredient) {
            return [
                'id'            => $ingredient->id,
                'text'          => $ingredient->name,
                'company_id'    => $ingredient->company_id,
                'image'         => $ingredient->package,
                'price'         => $ingredient->unit_price
            ];
        });

        return response()->json([
            'results' => $results
        ]);
    }
    

    public function update(IngredientRequest $request)
    {
        try {
            $requestData = $request->all();

            $user = backpack_user();

            $model = $this->crud->getCurrentEntry();

            $this->ingredientService->updateIngredient($requestData, $user, $model);

            if ($request->hasFile('ingredient_image')) {
                if ($model->image && Storage::disk('public')->exists($model->image)) {
                    Storage::disk('public')->delete($model->image);
                }
    
                $path = $request->file('ingredient_image')->store('ingredients', 'public');
                $model->image = $path;
            }
    
            $model->save();

            Alert::success(trans('backpack::crud.insert_success'))->flash();

            return redirect(backpack_url('ingredient'));
        } catch (Exception $exception) {
            report($exception);

            Alert::error(trans('backpack::base.error_saving'))->flash();

            return redirect()->back()->withInput();
        }
    }
}
