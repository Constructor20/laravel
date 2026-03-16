@extends('layouts.app')

@section('title', 'Ajouter un Exemplaire')

@section('content')
    <div class="max-w-md mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6">Ajouter un Exemplaire</h2>
            
            <form method="POST" action="{{ route('exemplar.store') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Livre</label>
                    <select name="id_book" class="w-full px-4 py-2 border rounded-lg" required>
                        <option value="">Sélectionner un livre</option>
                        @foreach($books as $book)
                            <option value="{{ $book->id }}">{{ $book->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Statut</label>
                    <select name="id_statut" class="w-full px-4 py-2 border rounded-lg" required>
                        <option value="1">Disponible</option>
                        <option value="2">Emprunté</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
                    Ajouter
                </button>
            </form>
            
            <a href="{{ route('exemplar.copies') }}" class="block mt-4 text-center text-indigo-600">← Retour</a>
        </div>
    </div>
@endsection
