<?php

Route::group(['middleware' => ['web']], function () {
	Route::get('/', 'PagesController@home');
	Route::get('/about', 'PagesController@about');
});
