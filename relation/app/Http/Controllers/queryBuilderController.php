<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class queryBuilderController extends Controller
{
    public function index(){
        $stu=DB::table('querybuilder')->get();
        return  view('quiry',['stu'=>$stu]);
    }
    public function user($id) {
    $stu = DB::table('querybuilder')->where('id', $id)->first();
    return view('user', ['user' => $stu]);
}

}
