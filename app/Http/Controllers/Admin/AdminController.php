<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());

        // $this->companyService = resolve(CompanyService::class);
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];

        $this->data['orders'] = $this->dataCalendar();

        if(backpack_user()->hasRole('super_admin')){
            $this->data['recipes'] = Recipe::pluck('name', 'id')->toArray();
            $this->data['users'] = User::pluck('name','id')->toArray();
        }else{
            $this->data['recipes'] = Recipe::where('company_id', backpack_user()->company_id)->pluck('name', 'id')->toArray();
        }

        return view(backpack_view('dashboard'), $this->data);
    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }

    public function dataCalendar()
    {
        $currentMonth = now()->month;
        $currentYear = now()->year;

        // Buscando as orders para o mês atual
        $orders = Order::with(['recipe'])->whereYear('start', $currentYear)
                        ->whereMonth('start', $currentMonth)
                        ->get();

        return $orders;
    }
    
}
