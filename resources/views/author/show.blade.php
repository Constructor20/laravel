@extends('layouts.app')

@section('title', $author->name)

@section('content')
    <div class="max-w-2xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6">{{ $author->name }}</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="text-gray-500">ID</label>
                    <p class="text-lg font-medium">{{ $author->id }}</p>
                </div>
                <div>
                    <label class="text-gray-500">Livres</label>
                    <p class="text-lg font-medium">{{ $author->books->count() }}</p>
                </div>
            </div>
            
            <div class="flex gap-4 mt-6">
                <a href="{{ route('author.edit', $author->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Modifier</a>
                <a href="{{ route('author.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Retour</a>
            </div>
        </div>
    </div>
@endsection
