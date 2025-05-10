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
        Schema::create('berbas', function (Blueprint $table) {
            $table->id();
            $table->date("date_harvested");
            $table->string("summary", 1024);
            $table->integer("grade");
            $table->integer("kilos_harvested");
            $table->foreignId("sorta_id")->constrained("sortas");
            $table->foreignId("plantaza_id")->constrained("plantazas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berbas');
    }
};
