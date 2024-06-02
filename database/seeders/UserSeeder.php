<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    for ($i = 1; $i <= 10; $i++) {
        User::create([
            'name' => 'User ' . $i,
            'family_name' =>' family_user'. $i,
            'email' => 'user' . $i . '@etu.uae.ac.ma',
            'password' => bcrypt('password'), // Change 'password' to the desired default password
            'image' => null,
            'filliere_id' => rand(1, 6) // Assuming you have 6 fillieres
        ]);
    }
}
}
