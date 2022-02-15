<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('/', 'GuestController@home')->name('home');
Route::get('/postcard/create', 'GuestController@createPostcard')->name('postcard.create');
Route::post('/postcard/store', 'GuestController@storePostcard')->name('postcard.store');

Route::get('api/postcards/list', 'ApiController@getPostcards')->name('api.postcards.list');
