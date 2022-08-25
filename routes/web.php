<?php

use App\Http\Controllers\MethodController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', 'PublicController@index')->name('index');
Route::get('/blogs', 'PublicController@blogIndex')->name('blogs');
Route::get('/view_blogs/{blog}', 'PublicController@viewBlogs')->name('Blog Details');

//protfolio-route
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/portfolio.add', 'PortfolioController@create')->name('portfolio.add');
Route::post('/portfolio.store', 'PortfolioController@store')->name('portfolio.store');
Route::get('/portfolio.edit/{portfolio}', 'PortfolioController@edit')->name('portfolio.edit');
Route::put('/portfolio.update/{portfolio}', 'PortfolioController@update')->name('portfolio.update');
Route::delete('/portfolio.destroy/{portfolio}', 'PortfolioController@destroy')->name('portfolio.destroy');


//blogs-route
Route::prefix('admin/blogs')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/view_blogs', 'BlogController@index')->name('blogindex');
    Route::get('/create', 'BlogController@create')->name('blogcreate');
    Route::post('/store', 'BlogController@store')->name('blogstore');
    Route::get('/edit/{blog}', 'BlogController@edit')->name('blogedit');
    Route::put('/update/{blog}', 'BlogController@update')->name('blogupdate');
    Route::delete('/destroy/{blog}', 'BlogController@destroy')->name('blogdestroy');
});
//service-route
Route::prefix('admin/services')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/view_services', 'ServicesController@index')->name('serviceindex');
    Route::get('/create', 'ServicesController@create')->name('servicecreate');
    Route::post('/store', 'ServicesController@store')->name('servicestore');
    Route::get('/edit/{service}', 'ServicesController@edit')->name('serviceedit');
    Route::put('/update/{service}', 'ServicesController@update')->name('serviceupdate');
    Route::delete('/destroy/{service}', 'ServicesController@destroy')->name('servicedestroy');
});
//method-route
Route::prefix('admin/method')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/method', 'MethodController@index')->name('method');
    Route::get('method.edit/{method}', 'MethodController@edit')->name('method.edit');
    Route::put('method.update/{method}', 'MethodController@update')->name('method.update');
    Route::delete('method.destroy/{service}', 'MethodController@destroy')->name('method.destroy');
});
//content-route
Route::prefix('admin/settings')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/content', 'WebsiteController@index')->name('contentIndex');
    Route::put('/update/{content}', 'WebsiteController@update')->name('update');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
// Route::get('/logout', [App\Http\Controllers\HomeController::class, 'home'])->name('index');
