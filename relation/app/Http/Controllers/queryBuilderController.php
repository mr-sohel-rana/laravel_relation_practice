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
    public function add() {
    $stu = DB::table('querybuilder')->insert([
        'name'=>'soehl',
        'dept'=>'cse',
        'roll'=>'9'
    ]);
     if($stu){
        return("insert successfull");
     }else{
        return('failed');
     }
}

public function deleteUser(){
    $stu=DB::table('querybuilder')->where('id',5)->delete();

    if($stu){
        return ("delete successfully");
    }else{
        return('failed');
     }
}

}
