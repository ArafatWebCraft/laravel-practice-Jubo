<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
//    public function name()
//    {
//        $list = [
//            ['Fruit'=>'Banana','size'=>30],
//            ['Fruit'=>'Mango','size'=>59],
//            ['Fruit'=>'Pineaple','size'=>23]
//        ];
//        return view('index',['data'=>$list]);
//    }


    public function test($password)
    {
        return view('index',compact('password'));
    }



}
