<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TodoController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form/{id}', function ($id) {
    echo  $id;                                                         
    return view('formpage');
});
Route::get('formpage',[FormController::class,'index']);

Route::get('about',[FormController::class,'about']);
Route::get('contact',[FormController::class,'contact']);

Route::view('news1','news1');
Route::view('news2','news2');
Route::post('form_submit',[TodoController::class,'store']);
Route::get('todo_show',[TodoController::class,'show']);
Route::get('todo_delete/{id}',[TodoController::class,'destroy']);
Route::get('todo_edit/{id}',[TodoController::class,'edit']);

Route::put('todo_update/{id}',[TodoController::class,'update'])->name('todo_update');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

