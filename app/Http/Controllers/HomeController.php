<?php

namespace App\Http\Controllers;

use App\Products;
use App\User;
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
        $products = Products::all();
        return view('dashboard.index', compact('products'));
    }

    public function users(){
        $users = User::all();
        return view('funcionarios.users', compact('users'));
    }
}
