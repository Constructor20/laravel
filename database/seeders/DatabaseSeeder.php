<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Statut;
use App\Models\Exemplar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        DB::table('role')->insert([
            ['role' => 'admin'],
            ['role' => 'user']
        ]);

        User::create([
            'name' => 'Aleix',
            'email' => 'aleix@test.com',
            'password' => bcrypt('password'),
            'id_role' => 1
        ]);

        User::create([
            'name' => 'User Test',
            'email' => 'user@test.com',
            'password' => bcrypt('password'),
            'id_role' => 2
        ]);

        $statut1 = Statut::create(['statut' => 'Disponible']);
        $statut2 = Statut::create(['statut' => 'Emprunté']);

        $author1 = Author::create(['name' => 'Victor Hugo']);
        $author2 = Author::create(['name' => 'Jules Verne']);
        $author3 = Author::create(['name' => 'Agatha Christie']);

        $cat1 = Category::create(['category' => 'Roman']);
        $cat2 = Category::create(['category' => 'Science-fiction']);
        $cat3 = Category::create(['category' => 'Thriller']);

        $book1 = Book::create(['title' => 'Les Misérables', 'id_author' => $author1->id]);
        $book1->categories()->attach($cat1->id);

        $book2 = Book::create(['title' => 'Vingt mille lieues sous les mers', 'id_author' => $author2->id]);
        $book2->categories()->attach($cat2->id);

        $book3 = Book::create(['title' => 'Le Crime de l\'Orient-Express', 'id_author' => $author3->id]);
        $book3->categories()->attach($cat3->id);

        Exemplar::create(['id_book' => $book1->id, 'id_statut' => $statut1->id, 'comissioning' => '2025-01-01']);
        Exemplar::create(['id_book' => $book1->id, 'id_statut' => $statut2->id, 'comissioning' => '2025-01-01']);
        Exemplar::create(['id_book' => $book2->id, 'id_statut' => $statut1->id, 'comissioning' => '2025-01-01']);
        Exemplar::create(['id_book' => $book3->id, 'id_statut' => $statut1->id, 'comissioning' => '2025-01-01']);
    }
}
