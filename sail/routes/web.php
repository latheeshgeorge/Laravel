<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about/{id}', function ($id) {
    $data = [
        "message" => "this is the message",
        "totalprice" => "4500",
        "items" => ["apple","orrange"],
        "id"=>$id


    ];
    return view('about',$data);
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/posts/{id}', "App\Http\Controllers\PostsController@index");
