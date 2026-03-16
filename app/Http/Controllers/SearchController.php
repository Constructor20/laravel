<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search($params) {
        $books = Book::with('author', 'categories', 'exemplars.statut')
            ->where('title', 'like', '%' . $params . '%')
            ->orWhereHas('author', function($query) use ($params) {
                $query->where('name', 'like', '%' . $params . '%');
            })
            ->get();
        
        return view('search.results', compact('books', 'params'));
    }

    public function index() {
        $books = Book::with('author', 'categories', 'exemplars.statut')->get();
        return view('search.index', compact('books'));
    }
}
