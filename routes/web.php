<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', 'UserController@login');
Route::apiResource('users', 'UserController');

Route::get('/form', function () {
    return view('form');
});
Route::apiResource('notes', 'NoteController');