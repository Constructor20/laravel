@extends('layouts.app')

@section('title', $category->category)

@section('content')
    <div class="max-w-2xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6">{{ $category->category }}</h2>
            
            <div class="flex gap-4 mt-6">
                <a href="{{ route('category.edit', $category->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Modifier</a>
                <a href="{{ route('category.index') }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Retour</a>
            </div>
        </div>
    </div>
@endsection
