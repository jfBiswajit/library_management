<?php

use Illuminate\Support\Facades\Route;

Route::get('/','LibraryController@index');
Route::get('/create_student', 'LibraryController@createStudent');
Route::post('/create_student', 'LibraryController@createStudent');
Route::get('/create_book', 'LibraryController@createBook');
Route::post('/create_book', 'LibraryController@createBook');
