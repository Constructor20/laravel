@extends('layouts.app')

@section('title', 'Mes Emprunts')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-6">Mes Emprunts</h2>
        
        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif
        
        @if($loans->isEmpty())
            <p class="text-gray-500">Vous n'avez aucun emprunt en cours.</p>
            <a href="{{ route('home') }}" class="text-indigo-600 hover:text-indigo-800 mt-4 inline-block">← Parcourir le catalogue</a>
        @else
            <div class="space-y-4">
                @foreach($loans as $loan)
                    <div class="bg-white rounded-lg shadow-md p-4 flex justify-between items-center">
                        <div>
                            <h3 class="font-bold">Emprunt #{{ $loan->id }}</h3>
                            <p class="text-gray-500">Date: {{ $loan->borrow->borrowed_date ?? 'N/A' }}</p>
                            <p class="text-gray-500">Exemplaire ID: {{ $loan->id_exemplar ?? 'N/A' }}</p>
                        </div>
                        <a href="{{ url('/return/' . $loan->id) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                            Retourner
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
