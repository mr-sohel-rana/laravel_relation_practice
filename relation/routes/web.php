<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/data', function () {
    $users = User::with('phone')->get();
    return response()->json(['users'=>$users]);
});

Route::get('/data1',function(){
    $posts=Post::with('comments')->find(1);
  return view('welcome',['data'=>$posts]);
});
