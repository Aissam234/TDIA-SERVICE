<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    for ($i = 1; $i <= 10; $i++) {
        Teacher::create([
            'name' => 'Teacher ' . $i,
            'family_name' => 'teacher',
            'email' => 'teacher' . $i . '@uae.ac.ma',
            'filieres' => 1,
            'password' => bcrypt('password'), // Change 'password' to the desired default password
            'Image' => '',
            'updated_at' => NOW(),
            'created_at' => NOW(),
        ]);
    }
}
}
