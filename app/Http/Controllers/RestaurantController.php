<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index(){
        $menu = Restaurant::all();
        return view('restaurant.index', compact('menu'));
    }

    public function create(){
        return view('menu.create');
    }

    public function store(Request $request){
        $menu = new Restaurant;
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->save();

        return redirect()->route('restaurant.index');
    }
}