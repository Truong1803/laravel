<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodsController extends Controller
{
    //
    public function index() {
        $foods = Food::all();
        return view('foods.index', [
            'foods' => $foods,
        ]);
    }

    public function create() {
        return view('foods.create');
    }

    public function store(Request $request) {
        // dd('this is store function');
        $food = new Food();
        $food->name = $request->input('name');
        $food->description = $request->input('description');
        $food->count = $request->input('count');

        $food->save();
        return redirect('/foods');
    }
}
