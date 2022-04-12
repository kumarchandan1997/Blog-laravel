<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
Route::get('/blog_index',[BlogController::class,'index']);
Route::get('/blog_create',[BlogController::class,'create']);
Route::post('/blog_store',[BlogController::class,'store']);
Route::get('/blog_edit/{id}', [BlogController::class, 'edit']);
Route::put('/blog_update/{id}', [BlogController::class, 'update']);
Route::delete('/blog_delete/{id}', [BlogController::class, 'destroy']);
Route::get('/blog_show/{id}',[BlogController::class,'show']);
