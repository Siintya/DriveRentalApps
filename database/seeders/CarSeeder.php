<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            [
                'brand' => 'Toyota',
                'model' => 'Camry',
                'license_plate' => 'AB 123 CD',
                'daily_rate' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'license_plate' => 'XY 789 ZA',
                'daily_rate' => 90000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Ford',
                'model' => 'Mustang',
                'license_plate' => 'FG 456 HI',
                'daily_rate' => 120000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Chevrolet',
                'model' => 'Cruze',
                'license_plate' => 'JK 987 LM',
                'daily_rate' => 95000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Altima',
                'license_plate' => 'NO 654 PQ',
                'daily_rate' => 85000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Mazda',
                'model' => 'CX-5',
                'license_plate' => 'RS 321 TU',
                'daily_rate' => 110000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Hyundai',
                'model' => 'Elantra',
                'license_plate' => 'VW 567 WX',
                'daily_rate' => 80000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Kia',
                'model' => 'Soul',
                'license_plate' => 'YZ 890 AB',
                'daily_rate' => 75000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Subaru',
                'model' => 'Forester',
                'license_plate' => 'CD 123 EF',
                'daily_rate' => 105000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'brand' => 'Volkswagen',
                'model' => 'Golf',
                'license_plate' => 'GH 456 IJ',
                'daily_rate' => 95000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
