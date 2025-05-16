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
        Schema::create('sortas', function (Blueprint $table) {
            $table->id();
            $table->string("kind");
            $table->text("description");
            $table->decimal("average_fruit_size", 8, 2);
            $table->decimal("average_fertility", 8, 1);
            $table->string("image")->default("default.jpg");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sortas');
    }
};
