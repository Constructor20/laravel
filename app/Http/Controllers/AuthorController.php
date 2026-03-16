<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('author.index', compact('authors'));
    }

    public function create()
    {
        return view('author.create');
    }

    public function store(Request $request)
    {
        Author::create($request->all());
        return redirect()->route('author.index');
    }

    public function show(string $id)
    {
        $author = Author::findOrFail($id);
        return view('author.show', compact('author'));
    }

    public function edit(string $id)
    {
        $author = Author::findOrFail($id);
        return view('author.edit', compact('author'));
    }

    public function update(Request $request, string $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return redirect()->route('author.index');
    }

    public function destroy(string $id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect()->route('author.index');
    }
}
