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
    })->name('librarian.login');

    Route::get('/register', function () {
        return view('register');
    })->name('librarian.register');

    Route::prefix('/manage-collection')->group(function (){
        Route::resource('books', 'BookController');
        Route::resource('thesis', 'ThesisController');
    });

    Route::prefix('/manage-loan')->group(function (){

       Route::get('/pending', function (){
           return view('loans.loan-pending');
       })->name('loan.pending');

        Route::get('/active', function (){
            return view('loans.loan-active');
        })->name('loan.active');

        Route::get('/history', function (){
            return view('loans.loan-history');
        })->name('loan.history');
    });

    Route::prefix('/manage-policy')->group(function (){
        Route::get('/index', function (){
            return view('policy.index');
        })->name('policy.index');

        Route::get('/edit', function (){
            return view('policy.edit');
        })->name('policy.edit');
    });

    Route::get('/manage-policy', function () {
        return view('policy.index');
    });

});


