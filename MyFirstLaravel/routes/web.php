<?php
use App\Http\Controllers\index;
use Illuminate\Support\Facades\Route;

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

//Call the Method of Controller's Class
Route::get('/',[index::class,'website']);
Route::get('/home',[index::class,'home']);
Route::get('/blog',[index::class,'blog']);
Route::get('/contact',[index::class,'contact']);


