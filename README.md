# Bibliothèque - Projet Laravel

## Description

Application web de gestion de bibliothèque avec emprunt de livres.

## Fonctionnalités

- **Catalogue** : Consultation des livres disponibles
- **Recherche** : Recherche par titre ou auteur
- **Emprunt/Retour** : Système d'emprunt de livres
- **Back-office** : Gestion des livres, auteurs, catégories, exemplaires

## Installation

```bash
# Installer les dépendances
composer install

# Copier le fichier .env
cp .env.example .env

# Générer la clé d'application
php artisan key:generate

# Lancer les migrations
php artisan migrate

# (Optionnel) Peuplement de la base
php artisan db:seed
```

## Lancer le serveur

```bash
php artisan serve
```

Le site sera accessible sur `http://127.0.0.1:8000`

## Comptes de test

- **Email** : aleix@test.com
- **Mot de passe** : password

## Routes

### Front-office
- `/` - Accueil / Catalogue
- `/search` - Recherche
- `/borrowing` - Mes emprunts
- `/connect` - Connexion

### Back-office
- `/bo/books` - Gestion des livres
- `/bo/authors` - Gestion des auteurs
- `/bo/categories` - Gestion des catégories
- `/bo/copies` - Gestion des exemplaires
- `/bo/profils` - Gestion des utilisateurs

## Technologies

- Laravel 11
- MySQL
- Tailwind CSS
