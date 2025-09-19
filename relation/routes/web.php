<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


Route::get('/data', function () {
    $users = User::with('phone')->get();
    return response()->json(['users'=>$users]);
});

Route::get('/data1',function(){
    $posts=Post::with('comments')->find(1);
  return view('welcome',['data'=>$posts]);
});



Route::get('/', function () {
    $posts = Post::with('categories')->find(1);
    return response()->json(['data' => $posts]);
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
         return ('test data');
    });
    Route::get('/user', function () {
         return ('test s');
    });
});
Route::get('/about', function () {

    return view('about');
});
