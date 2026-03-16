@extends('layouts.app')

@section('title', 'Ajouter un Livre')

@section('content')
    <div class="max-w-md mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6">Ajouter un Livre</h2>
            
            <form method="POST" action="{{ route('book.store') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Titre</label>
                    <input type="text" name="title" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Auteur</label>
                    <select name="id_author" class="w-full px-4 py-2 border rounded-lg" required>
                        <option value="">Sélectionner un auteur</option>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Catégories</label>
                    <div class="space-y-2">
                        @foreach($categories as $category)
                            <label class="flex items-center">
                                <input type="checkbox" name="categories[]" value="{{ $category->id }}" class="mr-2">
                                <span>{{ $category->category }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
                    Ajouter
                </button>
            </form>
            
            <a href="{{ route('book.index') }}" class="block mt-4 text-center text-indigo-600">← Retour</a>
        </div>
    </div>
@endsection
