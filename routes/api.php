<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//constraints that makes variable name to use alphabets only
Route::get('/users/{name?}', function ($name = null) {
    return 'Hello ' .$name;
})->where('name', '[a-zA-Z]+');

//Constraint that makes id to be numbers only
Route::get('/products/{id?}', function ($id = null) {
    return 'Product id is ' . $id;
})->where('id', '[0-9]+');

//Registers a route that responds to multiple http route methods
Route::match(['get', 'post'], '/students', function (Request $req) {
    return 'Request method is '.$req->method();
});

//Registers a route that responds to all http route methods
Route::any('/posts', function (Request $req) {
    return 'Requested method is '. $req-method();
});
