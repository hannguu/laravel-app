<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    // pass data to view
    {
        $title = 'Training laravel';
        $name = 'Duc';
        $student = [
            'name' => 'Hoang Anh Duc',
            'age' => 18,
            'email' => 'duchadev145@gmail.com',
            'isGood' => true
        ];
        // return view('products.index', compact('title'));
        // return view('products.index')->with('name',$name);
        // return view('products.index',compact('student'));
        // return view('products.index', [
        //     'student'=> $student
        // ]);
        print_r(route('products'));
        return view('products.index');
    }
    public function detail($productName, $id)
    {

        return "product name is: " . $productName . " and product id is: " . $id;
        // return "product id = ".$id;
        // $phone = [
        //     'phone' => 'iphone',
        //     'samsung'=> 'samsung'
        // ];
        // return view('products.index',
        // [
        //     'product' => $phone[$productName] ?? 'unknown product'
        // ]);
    }
}
