<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index ()
    {
        $fruits = array('Mango', 'Orange', 'Bannana', 'Apple');
        return view('welcome', compact('fruits'));
    }
}
