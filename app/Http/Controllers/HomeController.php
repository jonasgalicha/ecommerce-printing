<?php

namespace App\Http\Controllers;

use App\Enums\UserTypeEnum;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function supplierHome()
    {
        return view('supplier.dashboard');
    }

    public function userHome()
    {
        return view('client.dashboard');
    }

    public function staffs()
    {
        $staffs = User::role(UserTypeEnum::Staff)->get();

        return view('supplier.staffList', compact('staffs'));
    }

}
