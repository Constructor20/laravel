@extends('layouts.app')

@section('title', 'Recherche - Ma Bibliothèque')

@section('content')
    <!-- Search Results -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-6">
            @if(isset($params))
                Résultats pour "{{ $params }}"
            @else
                Tous nos livres
            @endif
        </h2>
        
        @if($books->isEmpty())
            <p class="text-gray-500 text-center py-8">Aucun livre trouvé.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($books as $book)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                        <div class="h-48 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                            <i class="fas fa-book text-white text-5xl"></i>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg mb-1">{{ $book->title }}</h3>
                            <p class="text-gray-500 text-sm mb-2">{{ $book->author->name ?? 'Auteur inconnu' }}</p>
                            
                            @php
                                $availableExemplar = $book->exemplars->where('id_statut', 1)->first();
                            @endphp
                            
                            <div class="flex items-center justify-between">
                                @if($availableExemplar)
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Disponible</span>
                                    @auth
                                        <form action="{{ route('borrowing.borrow', $availableExemplar->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">Emprunter</button>
                                        </form>
                                    @else
                                        <a href="{{ route('user.connect') }}" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">Connecter pour emprunter</a>
                                    @endauth
                                @else
                                    <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Emprunté</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        
        <div class="mt-6">
            <a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-800">← Retour au catalogue</a>
        </div>
    </div>
@endsection
