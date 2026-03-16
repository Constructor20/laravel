<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ExemplarController;
use App\Http\Controllers\BorrowController;

//Base root
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', function () {
    return view('index');
});

// USER
Route::get('/subscription', [UserController::class, 'subscription']);
Route::get('/connect', [UserController::class, 'connect']);
Route::get('/profil', [UserController::class, 'personalProfil']);


// SEARCH
Route::get('/search/{params}', [SearchController::class, 'search']);
Route::get('/exemplar/{id}', [ExemplarController::class, 'exemplar']);

// EMPRUNT
Route::get('/borrowing', [BorrowController::class, 'borrowing']); // list book
Route::get('/borrowing/{id}', [BorrowController::class, 'borrow']); // adding book
Route::get('/return/{id}', [BorrowController::class, 'return']); // return book

// BACK OFFICE

Route::get('/bo/profils', [UserController::class, 'profils']);
Route::get('/profil/{id}', [UserController::class, 'profil']);


Route::get('/bo/copies', [ExemplarController::class, 'copies']);
Route::get('/bo/exemplar/{id}', [ExemplarController::class, 'exemplaire']);
Route::get('/bo/exemplar/add', [ExemplarController::class, 'add']);
Route::get('/bo/exemplar/update/{id}', [ExemplarController::class, 'update']);
Route::get('/bo/exemplar/delete/{id}', [ExemplarController::class, 'delete']);
