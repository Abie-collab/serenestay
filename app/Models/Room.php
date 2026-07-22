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
        'image',
        'status',
    ];

    protected $casts = [
        'price_per_night' => 'decimal:2',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
 }

