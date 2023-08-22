<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    public function run()
    {
        $bookings = [
            [
                'user_id' => 1,
                'car_id' => 1,
                'start_date' => now()->subDays(2),
                'end_date' => now()->addDays(3),
            ],
            [
                'user_id' => 1,
                'car_id' => 2,
                'start_date' => now()->addDays(1),
                'end_date' => now()->addDays(5),
            ],
            [
                'user_id' => 1,
                'car_id' => 3,
                'start_date' => now()->addDays(2),
                'end_date' => now()->addDays(4),
            ],
            [
                'user_id' => 1,
                'car_id' => 4,
                'start_date' => now()->subDays(1),
                'end_date' => now()->addDays(2),
            ],
            [
                'user_id' => 1,
                'car_id' => 5,
                'start_date' => now()->addDays(3),
                'end_date' => now()->addDays(6),
            ],
        ];

        foreach ($bookings as $booking) {
            Booking::create($booking);
        }
    }
}
