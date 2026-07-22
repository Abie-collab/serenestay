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
        Schema::table('booking', function (Blueprint $table) {
            $table->enum('status', ['confirmed', 'completed', 'cancelled'])
                ->default('confirmed')->after('guests_count');
            $table->decimal('base_price', 10, 2)->after('status');
            $table->decimal('service_fee', 10, 2)->default(50)->after('base_price');
            $table->decimal('tax_amount', 10, 2)->after('service_fee');
            $table->decimal('total_price', 10, 2)->after('tax_amount');
        });
    }

public function down(): void
    {
        Schema::table('booking', function (Blueprint $table) {
            $table->dropColumn(['status', 'base_price', 'service_fee', 'tax_amount', 'total_price']);
        });
    }
};
