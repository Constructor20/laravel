@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
    <div class="max-w-md mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6 text-center">Connexion</h2>
            <form method="POST" action="/login">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Email</label>
                    <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Mot de passe</label>
                    <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg" required>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700">
                    Se connecter
                </button>
            </form>
            <p class="mt-4 text-center text-gray-600">
                Pas de compte ? <a href="{{ route('user.subscription') }}" class="text-indigo-600">S'inscrire</a>
            </p>
        </div>
    </div>
@endsection
