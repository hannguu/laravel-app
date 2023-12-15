<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        $user = session('user');
        return view('index')->with('user', $user);
    }
    public function about()
    {
        $name = 'Duc';
        $names = ['Hoang', 'Anh', 'Duc'];
        return view('about', [
            'names' => $names,
            'name' => $name
        ]);
    }
}
