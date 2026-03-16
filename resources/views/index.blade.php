@extends('layouts.app')

@section('title', 'Ma Bibliothèque')

@section('content')
    <!-- Hero Section -->
    <div class="bg-indigo-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Découvrez notre collection de livres</h1>
            <p class="text-lg mb-8">Des milliers de titres disponibles en emprunt</p>
            <a href="#catalog" class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">
                Parcourir le catalogue
            </a>
        </div>
    </div>

    <!-- Categories -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="flex justify-center space-x-4 flex-wrap gap-2">
            <a href="#" class="px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full hover:bg-indigo-200">Romans</a>
            <a href="#" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200">Thrillers</a>
            <a href="#" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200">Science-fiction</a>
            <a href="#" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200">Fantasy</a>
            <a href="#" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200">Biographie</a>
            <a href="#" class="px-4 py-2 bg-gray-100 text-gray-700 rounded-full hover:bg-gray-200">Histoire</a>
        </div>
    </div>

    <!-- Catalog -->
    <div id="catalog" class="max-w-7xl mx-auto px-4 py-8">
        <h2 class="text-2xl font-bold mb-6">Nos livres</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Book Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <div class="h-48 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                    <i class="fas fa-book text-white text-5xl"></i>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-1">Le Grand Roman</h3>
                    <p class="text-gray-500 text-sm mb-2">Jean Dupont</p>
                    <div class="flex items-center justify-between">
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Disponible</span>
                        <a href="/exemplar/1" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">Voir détails</a>
                    </div>
                </div>
            </div>

            <!-- Book Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <div class="h-48 bg-gradient-to-br from-blue-500 to-cyan-600 flex items-center justify-center">
                    <i class="fas fa-book text-white text-5xl"></i>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-1">L'Aventure Mystérieuse</h3>
                    <p class="text-gray-500 text-sm mb-2">Marie Martin</p>
                    <div class="flex items-center justify-between">
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Disponible</span>
                        <a href="/exemplar/2" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">Voir détails</a>
                    </div>
                </div>
            </div>

            <!-- Book Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <div class="h-48 bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center">
                    <i class="fas fa-book text-white text-5xl"></i>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-1">Les Secrets du Passé</h3>
                    <p class="text-gray-500 text-sm mb-2">Pierre Durand</p>
                    <div class="flex items-center justify-between">
                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Emprunté</span>
                        <a href="/exemplar/3" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">Voir détails</a>
                    </div>
                </div>
            </div>

            <!-- Book Card 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center">
                    <i class="fas fa-book text-white text-5xl"></i>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-1">Science et Avenir</h3>
                    <p class="text-gray-500 text-sm mb-2">Sophie Bernard</p>
                    <div class="flex items-center justify-between">
                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Disponible</span>
                        <a href="/exemplar/4" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">Voir détails</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
