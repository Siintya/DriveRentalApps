<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'brand',
        'model',
        'licence_plate',
        'daily_rate',
        'created_at',
        'updated_at'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function isCarAvailable($startDate, $endDate)
    {
        return !$this->bookings()->where(function ($query) use ($startDate, $endDate) {
            $query->where('end_date', '>=', $startDate)
                ->where('start_date', '<=', $endDate);
        })->exists();
    }


}
