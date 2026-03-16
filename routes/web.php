<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ExemplarController;
use App\Http\Controllers\BorrowController;

Route::get('/', [SearchController::class, 'index'])->name('home');

// USER
Route::get('/subscription', [UserController::class, 'subscription'])->name('user.subscription');
Route::get('/connect', [UserController::class, 'connect'])->name('user.connect');
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/profil', [UserController::class, 'personalProfil'])->name('user.profil');
Route::get('/logout', function() {
    auth()->logout();
    return redirect()->route('home');
})->name('user.logout');

// SEARCH
Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::get('/search/{params}', [SearchController::class, 'search'])->name('search.results');

// EMPRUNT
Route::get('/borrowing', [BorrowController::class, 'borrowing'])->name('borrowing.list');
Route::post('/borrowing/{id}', [BorrowController::class, 'borrow'])->name('borrowing.borrow');
Route::post('/return/{loanId}', [BorrowController::class, 'return'])->name('borrowing.return');

// BACK OFFICE
Route::get('/bo/profils', [UserController::class, 'profils'])->name('bo.profils');
Route::get('/bo/profil/{id}', [UserController::class, 'profil'])->name('bo.profil');

Route::get('/bo/copies', [ExemplarController::class, 'copies'])->name('exemplar.copies');
Route::get('/bo/exemplar/{id}', [ExemplarController::class, 'exemplaire'])->name('exemplar.show');
Route::get('/bo/exemplar/add', [ExemplarController::class, 'add'])->name('exemplar.add');
Route::post('/bo/exemplar/add', [ExemplarController::class, 'store'])->name('exemplar.store');
Route::get('/bo/exemplar/update/{id}', [ExemplarController::class, 'update'])->name('exemplar.update');
Route::put('/bo/exemplar/update/{id}', [ExemplarController::class, 'edit'])->name('exemplar.edit');
Route::post('/bo/exemplar/delete/{id}', [ExemplarController::class, 'delete'])->name('exemplar.delete');
