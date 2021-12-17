<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C1;
use App\Http\Controllers\Task;


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
Route::get('/v1', function () 
{
    return view('view1');
});
Route::get('/c1',[C1::class,'without_parameters']);
Route::get('/c1/{n1}',[C1::class,'with_parameters']);
Route::get('/v1/{n1}', function($n1)
{
    return view("view2",["default"=>$n1]);
});
Route::get('/default/{default?}', function($default="PERSON")
{
    return view("view2",["default"=>$default]);
});
// Route::get('/',function(){
//     return view("form");
// });
// Route::get('task', [Task::class, 'index']);
// Route::post('store-form', [Task::class, 'store']);