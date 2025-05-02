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
        Schema::table('galaxies', function (Blueprint $table) {
            $table->foreignId('type_id')->default(1)->after('name')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galaxies', function (Blueprint $table) {
            $table->dropForeign('galaxies_type_id_foreign');
            $table->dropColumn('type_id');
            
        });
    }
};
