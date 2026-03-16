@extends('layouts.app')

@section('title', 'Mes Emprunts')

@section('content')
    <div class="max-w-4xl mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-6">Mes Emprunts</h2>
        
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
                        </div>
                        <form action="{{ route('borrowing.return', ['loanId' => $loan->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                                Retourner
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
