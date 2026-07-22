<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = [
        'booking_reference', 'user_id', 'room_id',
        'first_name', 'last_name', 'email', 'phone',
        'check_in', 'check_out', 'nights', 'guests_count',
        'status', 'base_price', 'service_fee', 'tax_amount', 'total_price',
    ];

    protected $casts = [
        'check_in' => 'date',
        'check_out' => 'date',
        'base_price' => 'decimal:2',
        'service_fee' => 'decimal:2',
        'tax_amount' => 'decimal:2',
        'total_price' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($booking) {
            $booking->booking_reference ??= 'SERENES-' . now()->year . '-' . strtoupper(Str::random(6));
        });
    }

    public function user() { return $this->belongsTo(User::class); }
    public function room() { return $this->belongsTo(Room::class); }
}
