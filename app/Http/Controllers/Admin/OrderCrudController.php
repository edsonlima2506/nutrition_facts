<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * Class OrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class OrderCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Order::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/order');
        CRUD::setEntityNameStrings(trans('crud.order.singular'), trans('crud.order.plural'));
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
        CRUD::column('recipe_id')
        ->type('relationship')
        ->label(trans('crud.order.fields.recipe_id'))
        ->entity('recipe')
        ->attribute('name');
        CRUD::column('start')->label(trans('crud.order.fields.start'));
        CRUD::column('finish')->label(trans('crud.order.fields.finish'));
        CRUD::column('user_id')
        ->type('relationship')
        ->label(trans('crud.order.fields.user_id'))
        ->entity('user')
        ->attribute('name');
        CRUD::column('quantity')->label(trans('crud.order.fields.quantity'));
        CRUD::column('final_weight')->label(trans('crud.order.fields.final_weight'));
        CRUD::column('fractionation')->label(trans('crud.order.fields.fractionation'));
        CRUD::column('purpose')->label(trans('crud.order.fields.purpose'));
        CRUD::column('obs')->label(trans('crud.order.fields.obs'));
        CRUD::column('created_at')->label(trans('crud.order.fields.created_at'));
        CRUD::column('updated_at')->label(trans('crud.order.fields.updated_at'));

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(OrderRequest::class);

        // CRUD::field('id');
        CRUD::field('recipe_id')
        ->type('relationship')
        ->label(trans('crud.order.fields.recipe_id'))
        ->entity('recipe')
        ->attribute('name')
        ->placeholder(trans('crud.order.fields.recipe_id'))
        ->options(function ($query) {
            if (backpack_user()->hasRole('super_admin')) {
                return $query->get(); // Retorna todas as receitas para super admin
            }
    
            return $query->where('company_id', backpack_user()->company_id)->get();
        });
        CRUD::field('start')->label(trans('crud.order.fields.start'));
        CRUD::field('finish')->label(trans('crud.order.fields.finish'));
        if (backpack_user()->hasRole('client')) {
            CRUD::field('user_id')
                ->type('hidden')
                ->value(backpack_user()->id);
        } else {
            CRUD::field('user_id')
                ->type('relationship')
                ->label(trans('crud.order.fields.user_id'))
                ->entity('user')
                ->attribute('name')
                ->placeholder(trans('crud.order.fields.user_id'));
        }
        CRUD::field('quantity')->label(trans('crud.order.fields.quantity'));
        CRUD::field('final_weight')->label(trans('crud.order.fields.final_weight'));
        CRUD::field('fractionation')->label(trans('crud.order.fields.fractionation'));
        CRUD::field('purpose')->label(trans('crud.order.fields.purpose'));
        CRUD::field('obs')->label(trans('crud.order.fields.obs'));

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

    public function getEventsForMonth(Request $request)
    {
        $currentYear = $request->input('year');
        $currentMonth = $request->input('month');
        
        $orders = Order::with('recipe')
                        ->whereYear('start', $currentYear)
                        ->whereMonth('start', $currentMonth)
                        ->get();

        return response()->json($orders);
    }

    public function dashboardStore(OrderRequest $request)
    {
        try{
            $validatedData = $request->validated();
           
            $order = Order::create($validatedData);
    
            return response()->json([
                'success' => true,
                'order' => [
                    'id' => $order->id,
                    'recipe_name' => $order->recipe->name, // Nome da receita
                    'start' => $order->start,
                    'finish' => $order->finish,
                ],
            ]);

        }catch(\Exception $e){
            
        }
    }
}
