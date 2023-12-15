<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Food;
use App\Models\Category;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

class FoodsController extends Controller
{
    //
    public function index()
    {
        $food = Food::all();

        // $food = Food::where('name','=','chicken')->firstOrFail();
        // dd($food);
        // $food= DB::table("food")
        // ->select('*')
        // ->get();

        // dd($food);
        return view('foods.index',
            [
                'foods' => $food,
            ]);
    }
    public function create()
    {
        $categories = Category::all();
        return view('foods.create')->with('categories', $categories);
    }
    public function edit($id)
    {
        // dd($id);

        $food = Food::find($id);
        return view('foods.edit', [
            'food' => $food
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validated();
        $food = Food::where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'count' => $request->input('count')
        ]);
        return redirect('/foods');
    }
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }
    public function show($id)
    {
        // dd('this is show function'.$id);
        $food = Food::find($id);
        // dd($food);
        $category = Category::find($food->category_id);
        $food->category = $category;
        return view('foods.show')->with('food', $food);
    }
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|unique:food',
            'description' => 'required',
            'count' => 'required|integer|min:1|max:250',

            'image' => 'required|mimes:jpeg,png,jpg,gif|max:5048',
        ]);
        // dd('this is store function');
        // $request->validate([
        //     'name'=>'required|unique:food',
        //     'description'=>'required',
        //     'count'=>'required|integer|min:1|max:250',
        //     'category_id'=>'required',
        // ]);
        // $request->validated();
        // $request->file('image')->guessExtension();
        // $request->file('image')->getMimeType(); 
        // $request->file('image')->getClientOriginalName(); // get file name
        // generate different name for file
        $generatedImageName = 'image' . time() . '-' . $request->name . '.' . $request->image->extension();
        //move to a folder
        $request->image->move(public_path('images'), $generatedImageName);

        // $food = new Food();
        // $food->name = $request->input('name');
        // $food->description = $request->input('description');
        // $food->count = $request->input('count');
        // $food->category_id = $request->input('category_id');
        // $food->image_path = $generatedImageName;
        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);
        $food->save();
        return redirect('/foods');
    }

}
