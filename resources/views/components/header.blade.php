<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-indigo-600">
                    <i class="fas fa-book-open mr-2"></i>Ma Bibliothèque
                </a>
            </div>
            
            <form action="/search" method="GET" class="flex-1 max-w-lg mx-8">
                <div class="relative">
                    <input type="text" name="params" placeholder="Rechercher un livre..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>

            <div class="flex items-center space-x-6">
                <a href="{{ route('borrowing.list') }}" class="text-gray-600 hover:text-indigo-600">
                    <i class="fas fa-shopping-bag mr-1"></i>Mes emprunts
                </a>
                <a href="{{ route('user.profil') }}" class="text-gray-600 hover:text-indigo-600">
                    <i class="fas fa-user mr-1"></i>Mon compte
                </a>
                @auth
                    <span class="text-gray-600">{{ auth()->user()->name }}</span>
                    <a href="/logout" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
                        Déconnexion
                    </a>
                @else
                    <a href="{{ route('user.connect') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                        Connexion
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>
