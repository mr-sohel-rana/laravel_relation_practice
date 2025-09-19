<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test1Controller extends Controller
{
    function show(string $id){
        return view('test1',['id'=>$id]);
    }
}
