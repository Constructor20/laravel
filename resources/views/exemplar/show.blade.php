@extends('layouts.app')

@section('title', 'Exemplaire')

@section('content')
    <div class="max-w-2xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6">Exemplaire #{{ $exemplar->id }}</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="text-gray-500">Livre</label>
                    <p class="text-lg font-medium">{{ $exemplar->book->title ?? 'N/A' }}</p>
                </div>
                <div>
                    <label class="text-gray-500">Statut</label>
                    <p class="text-lg font-medium">{{ $exemplar->statut->statut ?? 'N/A' }}</p>
                </div>
                <div>
                    <label class="text-gray-500">Date de mise en service</label>
                    <p class="text-lg font-medium">{{ $exemplar->comissioning ?? 'N/A' }}</p>
                </div>
            </div>
            
            <a href="{{ route('exemplar.copies') }}" class="inline-block mt-6 text-indigo-600">← Retour</a>
        </div>
    </div>
@endsection
