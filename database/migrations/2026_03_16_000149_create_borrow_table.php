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
        Schema::create('borrow', function (Blueprint $table) {
            $table->id();
            $table->timestamp("borrowed_date");
            $table->timestamps();
        });

        Schema::create('loans', function (Blueprint $table) {
            $table->foreignId("id_user")->constrained("users")->cascadeOnDelete();
            $table->foreignId("id_borrow")->constrained("borrow")->cascadeOnDelete();
            $table->timestamps();

            $table->primary(["id_user", "id_borrow"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
        Schema::dropIfExists('borrow');
    }
};
