<?php

namespace App\Http\Controllers\Admin;

use App\Enum\CompanyPattern;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Services\CompanyService;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Exception;
use Illuminate\Http\Request;
use Prologue\Alerts\Facades\Alert;

/**
 * Class CompanyCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CompanyCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * @var \App\Services\CompanyService
     */
    protected $companyService;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Company::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/company');
        CRUD::setEntityNameStrings(trans('crud.company.singular'), trans('crud.company.plural'));

        $this->companyService = resolve(CompanyService::class);
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
        CRUD::column('name')->label(trans('crud.company.fields.name'));
        
        CRUD::addColumn([
            'name'  =>  'pattern',
            'label' =>  trans('crud.company.fields.pattern'),
            'type'  =>  'closure',
            'function'  =>  function($entry) {
                return CompanyPattern::from($entry->pattern)->getLabel();
            }
        ]);

        CRUD::addColumn([
            'name'  =>  'country',
            'label' =>  trans('crud.company.fields.country'),
        ]);

        CRUD::addColumn([
            'name'  =>  'state',
            'label' =>  trans('crud.company.fields.state'),
        ]);

        CRUD::addColumn([
            'name'  =>  'city',
            'label' =>  trans('crud.company.fields.city'),
        ]);
        
        CRUD::column('created_at')->label(trans('crud.global.created_at'));
        CRUD::column('updated_at')->label(trans('crud.global.updated_at'));
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CompanyRequest::class);

        CRUD::field('name')
            ->label(trans('crud.company.fields.name'));

        CRUD::addField([
            'name'        => 'pattern',
            'label'       => trans('crud.company.fields.pattern'),
            'type'        => 'select_from_array',
            'options'     => CompanyPattern::labels(),
            'allows_null' => false,
        ]);

        CRUD::addField([
            'name'  => 'country', 
            'label' => trans('crud.company.fields.country'), 
            'type'  => 'text', 
        ]);

        CRUD::addField([
            'name'  => 'state', 
            'label' => trans('crud.company.fields.state'), 
            'type'  => 'text', 
        ]);

        CRUD::addField([
            'name'  => 'city',
            'label' => trans('crud.company.fields.ciry'), 
            'type'  => 'text', 
        ]);
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
        $this->setupListOperation();
    }

    /**
     * @param Company $company
     * 
     * @return view
     */
    public function myCompany(Company $company)
    {
        $this->checkIfUserBelongsCompany($company);

        return view(backpack_view('base.company.my_company'), compact('company'));
    }

    /**
     * @param Company $company
     * 
     * @return void
     */
    protected function checkIfUserBelongsCompany(Company $company): void
    {
        $user = backpack_user();

        if ($user->company_id != $company->id) {
            abort(403);
        }
    }

    /**
     * @param CompanyRequest $request
     * @param Company $company
     */
    public function myCompanyUpdate(CompanyRequest $request, Company $company)
    {
        try {
            $this->companyService->updateCompany($company, $request->all());
            Alert::success(trans('backpack::crud.update_success'))->flash();

            return redirect()->back();
        } catch (Exception $exception) {
            Alert::error(trans('backpack::base.error_saving'))->flash();

            return redirect()->back();
        }
    }
}
