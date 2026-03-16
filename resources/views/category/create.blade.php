@extends('layouts.app')

@section('title', 'Ajouter une Catégorie')

@section('content')
    <div class="max-w-md mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6">Ajouter une Catégorie</h2>
            
            <form method="POST" action="{{ route('category.store') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Nom</label>
                    <input type="text" name="category" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
                    Ajouter
                </button>
            </form>
            
            <a href="{{ route('category.index') }}" class="block mt-4 text-center text-indigo-600">← Retour</a>
        </div>
    </div>
@endsection
