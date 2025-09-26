<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Test1Controller;
use App\Http\Controllers\queryBuilderController;
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
 Route::get('/test', function () {
    $datas = [
        ['name' => 'sohel', 'dept' => 'ice'],
        ['name' => 'rahim', 'dept' => 'cse'],
        ['name' => 'karim', 'dept' => 'eee'],
        ['name' => 'jamal', 'dept' => 'bba'],
        ['name' => 'kamal', 'dept' => 'math'],
    ];

    return view('test', compact('datas'));
});

Route::get('/test1/{id}',[Test1Controller::class,'show']);
Route::get('/query',[queryBuilderController::class,'index']);
Route::get('/user/{id}',[queryBuilderController::class,'user'])->name('user');

Route::get('/addUser',[queryBuilderController::class,'add']);
Route::get('/deleteUser',[queryBuilderController::class,'deleteUser']);


