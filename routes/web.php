<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ExemplarController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;

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
Route::get('/return/{id}', [BorrowController::class, 'return'])->name('borrowing.return');
Route::post('/borrowing/{id}', [BorrowController::class, 'borrow'])->name('borrowing.borrow');
Route::get('/borrowing', [BorrowController::class, 'borrowing'])->name('borrowing.list');

// BACK OFFICE
Route::get('/bo/profils', [UserController::class, 'profils'])->name('bo.profils');
Route::get('/bo/profil/{id}', [UserController::class, 'profil'])->name('bo.profil');

// CRUD BOOKS
Route::get('/bo/books', [BookController::class, 'index'])->name('book.index');
Route::get('/bo/books/create', [BookController::class, 'create'])->name('book.create');
Route::post('/bo/books', [BookController::class, 'store'])->name('book.store');
Route::get('/bo/books/{id}', [BookController::class, 'show'])->name('book.show');
Route::get('/bo/books/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::put('/bo/books/{id}', [BookController::class, 'update'])->name('book.update');
Route::delete('/bo/books/{id}', [BookController::class, 'destroy'])->name('book.destroy');

// CRUD AUTHORS
Route::get('/bo/authors', [AuthorController::class, 'index'])->name('author.index');
Route::get('/bo/authors/create', [AuthorController::class, 'create'])->name('author.create');
Route::post('/bo/authors', [AuthorController::class, 'store'])->name('author.store');
Route::get('/bo/authors/{id}', [AuthorController::class, 'show'])->name('author.show');
Route::get('/bo/authors/{id}/edit', [AuthorController::class, 'edit'])->name('author.edit');
Route::put('/bo/authors/{id}', [AuthorController::class, 'update'])->name('author.update');
Route::delete('/bo/authors/{id}', [AuthorController::class, 'destroy'])->name('author.destroy');

// CRUD CATEGORIES
Route::get('/bo/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/bo/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/bo/categories', [CategoryController::class, 'store'])->name('category.store');
Route::get('/bo/categories/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/bo/categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/bo/categories/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/bo/categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

Route::get('/bo/copies', [ExemplarController::class, 'copies'])->name('exemplar.copies');
Route::get('/bo/exemplar/{id}', [ExemplarController::class, 'exemplaire'])->name('exemplar.show');
Route::get('/bo/exemplar/add', [ExemplarController::class, 'add'])->name('exemplar.add');
Route::post('/bo/exemplar/add', [ExemplarController::class, 'store'])->name('exemplar.store');
Route::get('/bo/exemplar/update/{id}', [ExemplarController::class, 'update'])->name('exemplar.update');
Route::put('/bo/exemplar/update/{id}', [ExemplarController::class, 'edit'])->name('exemplar.edit');
Route::post('/bo/exemplar/delete/{id}', [ExemplarController::class, 'delete'])->name('exemplar.delete');
