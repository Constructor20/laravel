@extends('layouts.app')

@section('title', 'Mon Profil')

@section('content')
    <div class="max-w-2xl mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-6">Mon Profil</h2>
            
            @if($user)
                <div class="space-y-4">
                    <div>
                        <label class="text-gray-500">Nom</label>
                        <p class="text-lg font-medium">{{ $user->name }}</p>
                    </div>
                    <div>
                        <label class="text-gray-500">Email</label>
                        <p class="text-lg font-medium">{{ $user->email }}</p>
                    </div>
                </div>
            @else
                <p class="text-gray-500">Veuillez vous connecter pour voir votre profil.</p>
                <a href="{{ route('user.connect') }}" class="inline-block mt-4 bg-indigo-600 text-white px-4 py-2 rounded-lg">Se connecter</a>
            @endif
        </div>
    </div>
@endsection
