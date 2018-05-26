<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('librarian')->group(function (){
    Route::get('/login', function () {
        return view('login');
    });

    Route::get('/register', function () {
        return view('register');
    });

    Route::get('/manage-book', function () {
        return view('books.index');
    });

    Route::get('/manage-loan', function () {
        return view('librarian.manage-loan');
    });

    Route::get('/manage-policy', function () {
        return view('policy.index');
    });

});


