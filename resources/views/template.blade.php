<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque - Librairie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-indigo-600">
                        <i class="fas fa-book-open mr-2"></i>Ma Bibliothèque
                    </a>
                </div>
                
                <div class="flex-1 max-w-lg mx-8">
                    <div class="relative">
                        <input type="text" placeholder="Rechercher un livre..." class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 text-gray-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center space-x-6">
                    <a href="/borrowing" class="text-gray-600 hover:text-indigo-600">
                        <i class="fas fa-shopping-bag mr-1"></i>Mes emprunts
                    </a>
                    <a href="/profil" class="text-gray-600 hover:text-indigo-600">
                        <i class="fas fa-user mr-1"></i>Mon compte
                    </a>
                    <a href="/connect" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                        Connexion
                    </a>
                </div>
            </div>
        </div>
    </nav>

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

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="font-bold text-lg mb-4">Ma Bibliothèque</h3>
                    <p class="text-gray-400">Votre bibliothèque de proximité</p>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Liens rapides</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/borrowing" class="hover:text-white">Mes emprunts</a></li>
                        <li><a href="/profil" class="hover:text-white">Mon compte</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-lg mb-4">Contact</h3>
                    <p class="text-gray-400">contact@bibliotheque.fr</p>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                &copy; 2026 Ma Bibliothèque. Tous droits réservés.
            </div>
        </div>
    </footer>
</body>
</html>
