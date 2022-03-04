<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index ()
    {
        echo '<h1>Fluent Strings</h1>';
        $slice = Str::of('Welcome to the badlands')->after('Welcome');
        echo $slice;
    }
}
