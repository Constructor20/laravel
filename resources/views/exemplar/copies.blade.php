@extends('layouts.app')

@section('title', 'Exemplaires - Back Office')

@section('content')
    <div class="max-w-6xl mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold">Gestion des Exemplaires</h2>
            <a href="{{ route('exemplar.add') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                Ajouter un exemplaire
            </a>
        </div>
        
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left">ID</th>
                        <th class="px-4 py-2 text-left">Livre</th>
                        <th class="px-4 py-2 text-left">Statut</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($exemplars as $exemplar)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $exemplar->id }}</td>
                            <td class="px-4 py-2">{{ $exemplar->book->title ?? 'N/A' }}</td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 rounded text-sm {{ $exemplar->id_statut == 1 ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $exemplar->statut->statut ?? 'N/A' }}
                                </span>
                            </td>
                            <td class="px-4 py-2">
                                <a href="{{ route('exemplar.show', $exemplar->id) }}" class="text-indigo-600 hover:text-indigo-800 mr-2">Voir</a>
                                <a href="{{ route('exemplar.update', $exemplar->id) }}" class="text-blue-600 hover:text-blue-800 mr-2">Modifier</a>
                                <form action="{{ route('exemplar.delete', $exemplar->id) }}" method="POST" class="inline">
                                    @csrf
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
