<?php

namespace App\Http\Controllers;

use App\Models\Exemplar;
use App\Models\Book;
use App\Models\Statut;
use Illuminate\Http\Request;

class ExemplarController extends Controller
{
    public function exemplar($id) {
        $exemplar = Exemplar::with('book.author', 'statut')->findOrFail($id);
        return view('exemplar.show', compact('exemplar'));
    }

    public function copies() {
        $exemplars = Exemplar::with('book.author', 'statut')->get();
        return view('exemplar.copies', compact('exemplars'));
    }

    public function exemplaire($id) {
        $exemplar = Exemplar::with('book.author', 'statut')->findOrFail($id);
        return view('exemplar.show', compact('exemplar'));
    }

    public function add() {
        $books = Book::all();
        $statuts = Statut::all();
        return view('exemplar.add', compact('books', 'statuts'));
    }

    public function store(Request $request) {
        Exemplar::create($request->all());
        return redirect()->route('exemplar.copies');
    }

    public function update($id) {
        $exemplar = Exemplar::findOrFail($id);
        $books = Book::all();
        $statuts = Statut::all();
        return view('exemplar.update', compact('exemplar', 'books', 'statuts'));
    }

    public function edit(Request $request, $id) {
        $exemplar = Exemplar::findOrFail($id);
        $exemplar->update($request->all());
        return redirect()->route('exemplar.copies');
    }

    public function delete($id) {
        $exemplar = Exemplar::findOrFail($id);
        $exemplar->delete();
        return redirect()->route('exemplar.copies');
    }
}
