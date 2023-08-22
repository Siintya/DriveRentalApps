<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalReturn extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'booking_id',
        'retun_date',
        'rental_days',
        'rental_cost',
        'created_at',
        'updated_at'
    ];

    public function bookings()
    {
        return $this->belongsTo(Booking::class);
    }
}
