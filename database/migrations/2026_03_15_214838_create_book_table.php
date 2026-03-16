<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('author', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string("category");
            $table->timestamps();
        });

        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->foreignId("id_author");
            $table->timestamps();

            
        });

        Schema::create('books_categories', function (Blueprint $table) {
            $table->foreignId("id_book");
            $table->foreignId("id_category");
            $table->timestamps();

            $table->primary(["id_book", "id_category"]);

            $table->foreign("id_book")->references("id")->on("book");
            $table->foreign("id_category")->references("id")->on("category");
        });

        Schema::create('statut', function (Blueprint $table) {
            $table->id();
            $table->string("statut");
            $table->timestamps();
        });

        Schema::create('exemplar', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_book");
            $table->foreignId("id_statut");
            $table->date("comissioning")->nullable();
            $table->timestamps();


            $table->foreign("id_book")->references("id")->on("book");
            $table->foreign("id_statut")->references("id")->on("statut");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('exemplar');
        Schema::dropIfExists('statut');
        Schema::dropIfExists('books_categories');
        Schema::dropIfExists('book');
        Schema::dropIfExists('author');
        Schema::dropIfExists('category');
    
    }
};
