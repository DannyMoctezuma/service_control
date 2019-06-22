<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

    public function agregar()
    {
        return view('agregar');
    }

    public function consultar()
    {
        return view('consultar');
    }

    public function editar()
    {
        return view('editar');
    }

    public function eliminar()
    {
        return view('eliminar');
    }
}
