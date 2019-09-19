<?php

// 名前を指定した Route の書き方
Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');

Route::get('/', 'ArticlesController@index')->name('home');
Route::resource('articles', 'ArticlesController');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
