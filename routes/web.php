<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Auth::routes();

Route::get('/backend', 'BackendController@index')->name('backend.index');
Route::get('/test', 'TestController@index')->name('test');

Route::resources([
    'article'=>'ArticleController'
]);