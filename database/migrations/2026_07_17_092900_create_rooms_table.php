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
        Schema::create('rooms', function (Blueprint $table) {
            
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();

            $table->string('title');                 // "Premium Executive Suite"
            $table->string('slug')->unique();
            $table->string('short_description')->nullable(); // card blurb
            $table->text('description')->nullable();         // full description section

            $table->decimal('price_per_night', 10, 2);

            // Room details "Total Space / Occupancy / Bed Setup / Balcony Sight" stat boxes
            $table->decimal('size_sqm', 6, 2)->nullable();
            $table->decimal('size_sqft', 7, 2)->nullable();
            $table->unsignedTinyInteger('max_guests')->default(2);
            $table->string('bed_type')->nullable();   // "King Bed"
            $table->string('view_type')->nullable();  // "Ocean View"

            $table->string('thumbnail')->nullable();  // card image
            $table->string('badge')->nullable();       // "Trending" / "Offers" / "Popular"

            $table->decimal('average_rating', 2, 1)->default(0); // 4.8
            $table->unsignedInteger('reviews_count')->default(0);

            $table->boolean('is_featured')->default(false);
            $table->enum('status', ['active', 'inactive', 'maintenance'])->default('active');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
