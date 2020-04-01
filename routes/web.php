<?php

use Illuminate\Support\Facades\Route;


Route::get('/','FrontendController@index') ->name('home');
Route::get('/show/{article}','FrontendController@show') ->name('frontend.show');
Route::get('/contact','FrontendController@contact') ->name('frontend.contact');
Route::get('/check','FrontendController@check') ->name('frontend.check');


Auth::routes();

Route::get('/backend', 'BackendController@index')->name('backend.index');
Route::get('/test', 'TestController@index')->name('test');

Route::resources([
    'article'=>'ArticleController'
]);

Route::get('/delete/{article}','ArticleController@delete')->name('article.delete');