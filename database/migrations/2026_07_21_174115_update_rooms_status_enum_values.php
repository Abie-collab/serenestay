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
        Schema::table('rooms', function (Blueprint $table) {
           DB::statement("ALTER TABLE rooms MODIFY status ENUM('available', 'booked', 'maintenance') DEFAULT 'available'");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            DB::statement("ALTER TABLE rooms MODIFY status ENUM('active', 'inactive', 'maintenance') DEFAULT 'active'");
        });
    }
};
