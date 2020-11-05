<?php

use Illuminate\Support\Facades\Route;

Route::get('/','LibraryController@index');
Route::get('/create_student', 'LibraryController@createStudent');
Route::post('/create_student', 'LibraryController@createStudent');
Route::get('/add_book', 'LibraryController@createBook');
Route::post('/add_book', 'LibraryController@createBook');
Route::get('/borrow_book', 'LibraryController@borrowBook');
Route::post('/borrow_book', 'LibraryController@borrowBook');
