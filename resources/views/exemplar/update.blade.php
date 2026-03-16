@extends('layouts.app')

@section('title', 'Modifier un Exemplaire')

@section('content')
    <div class="max-w-md mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6">Modifier l'Exemplaire #{{ $exemplar->id }}</h2>
            
            <form method="POST" action="{{ route('exemplar.edit', $exemplar->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Livre</label>
                    <select name="id_book" class="w-full px-4 py-2 border rounded-lg" required>
                        @foreach($books as $book)
                            <option value="{{ $book->id }}" {{ $book->id == $exemplar->id_book ? 'selected' : '' }}>
                                {{ $book->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Statut</label>
                    <select name="id_statut" class="w-full px-4 py-2 border rounded-lg" required>
                        <option value="1" {{ $exemplar->id_statut == 1 ? 'selected' : '' }}>Disponible</option>
                        <option value="2" {{ $exemplar->id_statut == 2 ? 'selected' : '' }}>Emprunté</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
                    Modifier
                </button>
            </form>
            
            <a href="{{ route('exemplar.copies') }}" class="block mt-4 text-center text-indigo-600">← Retour</a>
        </div>
    </div>
@endsection
