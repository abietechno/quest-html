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
        Schema::table('level_user', function (Blueprint $table) {
            $table->timestamp('material_read_at')->nullable()->after('completed_at');
            $table->integer('score')->default(0)->after('quiz_passed');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('level_user', function (Blueprint $table) {
            $table->dropColumn('material_read_at');
             $table->dropColumn('score');
        });
    }
};
