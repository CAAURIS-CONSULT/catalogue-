<?php

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



//Vue Notre  histoire 
Route::get('/', 'ClientController@index')->name('index');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Vue Notre  administrateur 
Route::get('/admin', 'HomeController@index')->name('admin');

//ROute client
Route::get('/addClt', 'AdminClientController@addClt')->name('addClt');
Route::post('/saveClt', 'AdminClientController@saveClt')->name('saveClt');
Route::get('/listClt', 'AdminClientController@listClt')->name('listClt');

// Route Service
Route::get('/addServ', 'AdminServiceController@addServ')->name('addServ');
Route::post('/saveServ', 'AdminServiceController@saveServ')->name('saveServ');
Route::get('/listServ', 'AdminServiceController@listServ')->name('listServ');

// Route CATALOGUE
Route::get('/addCart', 'AdminCatalogueController@addCart')->name('addCart');
Route::post('/saveCart', 'AdminCatalogueController@saveCart')->name('saveCart');
Route::get('/listCart', 'AdminCatalogueController@listCart')->name('listCart');


//Envoie message
Route::post('/contactUs', 'AdminClientController@contactUs')->name('contactUs');
