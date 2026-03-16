@extends('layouts.app')

@section('title', $book->title)

@section('content')
    <div class="max-w-2xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6">{{ $book->title }}</h2>
            
            <div class="space-y-4">
                <div>
                    <label class="text-gray-500">Auteur</label>
                    <p class="text-lg font-medium">{{ $book->author->name ?? 'N/A' }}</p>
                </div>
                <div>
                    <label class="text-gray-500">Catégories</label>
                    <div class="flex flex-wrap gap-2 mt-1">
                        @foreach($book->categories as $cat)
                            <span class="px-2 py-1 bg-gray-100 rounded">{{ $cat->category }}</span>
                        @endforeach
                    </div>
                </div>
                <div>
                    <label class="text-gray-500">Exemplaires</label>
                    <p class="text-lg font-medium">{{ $book->exemplars->count() }}</p>
                </div>
            </div>
            
            <div class="flex gap-4 mt-6">
                <a href="{{ route('book.edit', $book->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Modifier</a>
                <a href="{{ route('book.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Retour</a>
            </div>
        </div>
    </div>
@endsection
