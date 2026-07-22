<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->renameColumn('thumbnail', 'image');

            $table->dropColumn([
                'size_sqm',
                'size_sqft',
                'max_guests',
                'bed_type',
                'view_type',
                'badge',
                'average_rating',
                'reviews_count',
                'is_featured',
            ]);
        });
    }

    public function down(): void
    {
        Schema::table('rooms', function (Blueprint $table) {
            $table->renameColumn('image', 'thumbnail');

            $table->decimal('size_sqm', 8, 2)->nullable();
            $table->decimal('size_sqft', 8, 2)->nullable();
            $table->unsignedInteger('max_guests')->nullable();
            $table->string('bed_type')->nullable();
            $table->string('view_type')->nullable();
            $table->string('badge')->nullable();
            $table->decimal('average_rating', 3, 1)->nullable();
            $table->unsignedInteger('reviews_count')->default(0);
            $table->boolean('is_featured')->default(false);
        });
    }
};


