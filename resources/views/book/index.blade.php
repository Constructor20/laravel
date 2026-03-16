@extends('layouts.app')

@section('title', 'Gestion des Livres')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Gestion des Livres</h2>
            <a href="{{ route('book.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                Ajouter un livre
            </a>
        </div>
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Titre</th>
                        <th class="px-4 py-2 text-left">Auteur</th>
                        <th class="px-4 py-2 text-left">Catégories</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $book->id }}</td>
                            <td class="px-4 py-2">{{ $book->title }}</td>
                            <td class="px-4 py-2">{{ $book->author->name ?? 'N/A' }}</td>
                            <td class="px-4 py-2">
                                @foreach($book->categories as $cat)
                                    <span class="px-2 py-1 bg-gray-100 rounded text-xs mr-1">{{ $cat->category }}</span>
                                @endforeach
                            </td>
                            <td class="px-4 py-2">
                                <a href="{{ route('book.show', $book->id) }}" class="text-indigo-600 hover:text-indigo-800 mr-2">Voir</a>
                                <a href="{{ route('book.edit', $book->id) }}" class="text-blue-600 hover:text-blue-800 mr-2">Modifier</a>
                                <form action="{{ route('book.destroy', $book->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
