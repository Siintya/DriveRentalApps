<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'           => 'Siti',
            'password'       => bcrypt('password123'),
            'phone'          => '081234567890',
            'license_number' => 'ABC123',
            'address'        => '123 Main St, City',
        ]);
    }
}
