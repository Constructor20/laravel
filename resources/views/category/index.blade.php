@extends('layouts.app')

@section('title', 'Gestion des Catégories')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Gestion des Catégories</h2>
            <a href="{{ route('category.create') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                Ajouter une catégorie
            </a>
        </div>
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Nom</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $category->id }}</td>
                            <td class="px-4 py-2">{{ $category->category }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('category.show', $category->id) }}" class="text-indigo-600 hover:text-indigo-800 mr-2">Voir</a>
                                <a href="{{ route('category.edit', $category->id) }}" class="text-blue-600 hover:text-blue-800 mr-2">Modifier</a>
                                <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="inline">
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
