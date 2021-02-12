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

Route::get('/', 'SiteController@index')->name('Home');
Route::get('/product', 'SiteController@product')->name('Product');
Route::get('/news', 'SiteController@news')->name('News');
Route::get('/autoads', 'SiteController@autoads')->name('AutoAds');
Route::get('/contacts', 'SiteController@contacts')->name('Contacts');
Route::get('/product/create', 'SiteController@postad')->name('PostAd');

Route::get('/admins', 'Admin\\AdminController@index')->name('admin');
Route::get('/admins/carmodel', 'Admin\\AdminController@index')->name('admin_car_model');
Route::get('/admins/carmodel/create', 'Admin\\AdminController@create')->name('admin_car_model_create');
Route::post('/admins/carmodel/create', 'Admin\\AdminController@store')->name('admin_model_store');
Route::get('/admins/carmodel/{id}/create', 'Admin\\AdminController@edit')->name('admin_model_edit');
//Route::prefix('admins')->namespace('Admin')//->middleware(['role:admin'])
//    ->group(function () {
//        Route::get('/', 'CategoryController@index')->name('dashboard');
//        Route::resource('/category', 'CategoryController')->names('admin.category');
//        Route::resource('/company', 'CompanyController')->names('admin.company');
//    });

Auth::routes();


