<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidationRequest;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Category;
use App\Rules\Upperscase;

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
        $categories = Category::all();
        return view('foods.create')->with('categories', $categories);
    }

    public function store(CreateValidationRequest $request) {
        // dd('this is store function');

        // validate
        // $request->file('image')->guessExtension();//lay duoi file exp: jpg, png
        // $request->file('image')->getMimeType();//check xem file up len co phai file anh ko
        // $request->file('image')->getClientOriginalName();//get ten cua file
        // $request->file('image')->getSize();
        // $request->validated();
        // $request->validate([
        //     'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        // ]);

        $generatedImageName = 'image'.time().'-'.$request->name.'.'.$request->image->extension();

        $request->image->move(public_path('images'), $generatedImageName);

        $food = new Food();
        $food->name = $request->input('name');
        $food->description = $request->input('description');
        $food->count = $request->input('count');
        $food->category_id = $request->input('categories');
        $food->image_path = $generatedImageName;
        $food->save();
        return redirect('/foods');
    }

    public function edit($id) {
        $food = Food::find($id);
        // dd($food);
        return view('foods.edit')->with('food', $food);
    }

    public function update(CreateValidationRequest $request, $id) {
        $request->validated();
        $food = Food::where('id', $id)
                ->update([
                    'name' => $request->input('name'),
                    'count' => $request->input('count'),
                    'description' => $request->input('description')
                ]);
        return redirect('/foods');
    }

    public function destroy($id) {
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }

    public function show($id) {
        $food = Food::find($id);
        $category = Category::find($food->category_id);
        $food->category = $category;
        return view('foods.show')->with('food', $food);
    }
}
