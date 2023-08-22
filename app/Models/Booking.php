<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'car_id',
        'start_date',
        'end_date',
        'created_at',
        'updated_at'
    ];
    public function bookings()
    {
        return $this->belongsTo(Car::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function rentalReturn()
    {
        return $this->hasMany(RentalReturn::class);
    }

}
