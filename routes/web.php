<?php

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

use App\Category;
use App\Post;

//Route::get('/', function () {
//    $posts = App\Post::latest('published_at')->get();
//    return view('welcome',compact('posts'));
//});
//
//Route::get('posts', function (){
//   $posts = App\Post::latest('published_at')->get();
//   return view('welcome',compact('posts'));
//});

Route::get('/', function () {
    $posts = Post::latest('published_at')->get();
    return view('welcome',compact('posts'));
});

Route::get('posts', function (){
    $posts = Post::latest('published_at')->get();
    $categories = Category::all();
//    $categoryName = Category::latest('name')->get();
//    dd($categoryName);
    return view('welcome',with(compact('posts')), with(compact('categories')));
});

//Route::get('dashboard', function () {
//    return view('admin.layouts.layout');
//});

Route::get('admin', function () {
    return view('admin.dashboard');
});
