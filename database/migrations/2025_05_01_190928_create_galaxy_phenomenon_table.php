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
        Schema::create('galaxy_phenomenon', function (Blueprint $table) {
            $table->id();


            $table->foreignId('galaxy_id')->constrained();
            $table->foreignId('phenomenon_id')->constrained('phenomena');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galaxy_phenomenon');
    }
};
