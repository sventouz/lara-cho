<?php

Route::get('/', 'PagesController@index');
Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');

Route::get('articles', 'ArticlesController@index');
Route::get('articles/{id}', 'ArticlesController@show');
