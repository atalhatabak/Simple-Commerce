<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coffee;

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
        $coffees = Coffee::all();
        return view('home', ['coffees' => $coffees]);    
    }

    public function brand($id)
    {
        $id = str_replace('_', ' ', $id);
        $coffees = Coffee::where('brand', $id)->get();
        return view('home', ['coffees' => $coffees]);    
    }
    public function type($id)
    {
        $id = str_replace('_', ' ', $id);
        $coffees = Coffee::where('type', $id)->get();
        return view('home', ['coffees' => $coffees]);    
    }


}
