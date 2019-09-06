<?php

Route::get('about', 'PagesController@about')->name('about');
Route::get('contact', 'PagesController@contact')->name('contact');

// root を記事一覧にします
Route::get('/', 'ArticlesController@index')->name('home');

Route::get('articles', 'ArticlesController@index')->name('articles.index');
Route::get('articles/create', 'ArticlesController@create')->name('articles.create');
Route::get('articles/{id}', 'ArticlesController@show')->name('articles.show');
Route::post('articles', 'ArticlesController@store')->name('articles.store');
Route::get('articles/{id}/edit', 'ArticlesController@edit')->name('articles.edit');
Route::patch('articles/{id}', 'ArticlesController@update')->name('articles.update');
Route::delete('articles/{id}', 'ArticlesController@destroy')->name('articles.destroy');

// Route::resource('articles', 'ArticlesController');

Auth::routes();
// // GET メソッドは定義済
// Route::get('/auth/login', 'LoginController@show');
// // POST メソッドも定義する
// Route::post('/auth/login', 'LoginController@authenticate');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
