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

Route::post('/', 'SiteController@index')->name('Home');

Route::get('/', 'SiteController@index')->name('Home');
Route::get('/news', 'SiteController@news')->name('news');
Route::get('/new/{id}', 'SiteController@new')->name('new');
Route::get('/autoads', 'SiteController@autoads')->name('AutoAds');
Route::match(['get', 'post'], '/autoads/search', 'SearchController@index')->name('search');
Route::get('/one_car/{id}', 'SiteController@one_car')->name('one_car');
Route::get('/userAd', 'SiteController@userAd')->name('userAd');
Route::match(['get', 'post'], '/contacts', 'SiteController@contacts')->name('Contacts');

Route::get('/product/create', 'AddController@create')->name('PostAd.create');
Route::get('/product/create-data', 'AddController@data');
Route::post('/product/create', 'AddController@store')->name('PostAd.store');
Route::get('/product/{id}/edit', 'AddController@edit')->name('PostAd.edit');
Route::put('/product/{id}/update', 'AddController@update')->name('PostAd.update');
Route::delete('/product/{id}/destroy', 'AddController@destroy')->name('PostAd.destroy');

Route::post('/telegram', 'ContactController@telegram')->name('telegram');

//Route::prefix('admins')->namespace('Admin')//->middleware(['role:admin'])
//->group(function () {
//    Route::get('/', 'AdminController@index')->name('admin');
//    Route::resource('/news/', 'NewsController')->names('admin.news');
//    Route::resource('/cars/', 'CarsController')->names('admin.cars');
//});

Route::get('/admins', 'Admin\\AdminController@index')->name('admin');//->middleware(['auth:admin']);
Route::get('/admins/news', 'Admin\\NewsController@index')->name('admin.news');
Route::get('/admins/news/create', 'Admin\\NewsController@create')->name('admin.news.create');
Route::post('/admins/news/create', 'Admin\\NewsController@store')->name('admin.news.store');
Route::get('/admins/news/{id}/edit', 'Admin\\NewsController@edit')->name('admin.news.edit');
Route::put('/admins/news/{id}/update', 'Admin\\NewsController@update')->name('admin.news.update');
Route::delete('/admins/news/{id}/destroy', 'Admin\\NewsController@destroy')->name('admin.news.destroy');

Route::get('/admins/cars', 'Admin\\CarsController@index')->name('admin.cars');
Route::delete('/admins/cars/{id}/destroy', 'Admin\\CarsController@destroy')->name('admin.cars.destroy');


Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();


