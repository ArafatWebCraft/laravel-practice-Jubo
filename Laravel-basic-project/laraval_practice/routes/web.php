<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return 'hello gyes';
////});
//Route::delete('foo/bar',function (){
//    return 'hello world';
//});
//Route::match(['get','post'],'/',function (){
//    return 'hello world';
//});
//Route::any('foo', function () {
//    return 'Hello World';
//});
//Route::get('user/{name?}', function ($name = 'w3school.com') {
//    return $name;
//});

//Route::get('view',function (){
//    return redirect('/');
//});
//Route::get('/name',[\App\Http\Controllers\UserController::class,'name']);
//Route::get('user/{id}', function ($id) {
//    return 'User '.$id;
//});
//Route::get('/{name}/{id?}',function ($id,$name=null){
//    $data = compact('name','id');
//    return view('default')->with($data);
//});
//Route::get('/home',function (){
//    return 'This is home page';
//});
//Route::get('/contact',function (){
//    return 'This is contact page';
//});
//Route::get('/name',[\App\Http\Controllers\UserController::class,'name']);
//use App\Http\Controllers\UseController;
//Route::get('/show/{name}/{id?}',[UseController::class,'show']);

//Route::get('/',function (){
//    $articale = ['This name','hello','Commit','Free'];
//    return view('default',['data'=>$articale]);
//});

// Laravel named Route

//Route::get('/',function (){
//    return view('index');
//});
//Route::get('/postss',function (){
//    return view('post');
//})->name('post');
//Route::get('/gost',function (){
//    return view('default');
//});
//Route::redirect('east','gost');
//use App\Http\Controllers\UserController;
//Route::get('test/{password}',[UserController::class,'test']);
//
//Route::get('/',function (){
//    return view('index');
//});
Route::get('/home',function (){
    return view('home');
});
Route::get('/about',function (){
    return view('about');
});
