<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('category.index');
    }

    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('category.show', compact('category'));
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('category.index');
    }

    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
