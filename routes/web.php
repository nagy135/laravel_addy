<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'HomeController@index');
Route::get('/produkty/{category}', 'CatalogController@index');
Route::get('/produkty', 'CatalogController@index');
Route::get('/kontakt/{product}', 'ContactController@index');
Route::get('/kontakt', 'ContactController@index');
Route::get('/detail/{id}', 'DetailController@show');
