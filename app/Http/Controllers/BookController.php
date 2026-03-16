<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::with('author', 'categories')->get();
        return view('book.index', compact('books'));
    }

    public function create() {
        $authors = Author::all();
        $categories = Category::all();
        return view('book.create', compact('authors', 'categories'));
    }

    public function store(Request $request) {
        $book = Book::create([
            'title' => $request->title,
            'id_author' => $request->id_author
        ]);
        
        if ($request->categories) {
            $book->categories()->attach($request->categories);
        }
        
        return redirect()->route('book.index');
    }

    public function show($id) {
        $book = Book::with('author', 'categories', 'exemplars.statut')->findOrFail($id);
        return view('book.show', compact('book'));
    }

    public function edit($id) {
        $book = Book::with('categories')->findOrFail($id);
        $authors = Author::all();
        $categories = Category::all();
        return view('book.edit', compact('book', 'authors', 'categories'));
    }

    public function update(Request $request, $id) {
        $book = Book::findOrFail($id);
        $book->update([
            'title' => $request->title,
            'id_author' => $request->id_author
        ]);
        
        $book->categories()->sync($request->categories ?? []);
        
        return redirect()->route('book.index');
    }

    public function destroy($id) {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('book.index');
    }
}
