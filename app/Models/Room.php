<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'short_description',
        'description',
        'price_per_night',
        'size_sqm',
        'size_sqft',
        'max_guests',
        'bed_type',
        'view_type',
        'thumbnail',
        'badge',
        'average_rating',
        'reviews_count',
        'is_featured',
        'status',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'average_rating' => 'decimal:1',
        'price_per_night' => 'decimal:2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
 }

