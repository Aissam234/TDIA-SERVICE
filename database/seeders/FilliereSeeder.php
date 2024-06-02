<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Filliere;

class FilliereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fillieres = [
            ['name' => 'TDIA', 'created_at' => NOW(),'updated_at' => NOW()],
            ['name' => 'INFO', 'created_at' => NOW(),'updated_at' => NOW()],
            ['name' => 'ID', 'created_at' => NOW(),'updated_at' => NOW()],
            ['name' => 'G2E', 'created_at' => NOW(),'updated_at' => NOW()],
            ['name' => 'CIVIL', 'created_at' => NOW(),'updated_at' => NOW()],
            ['name' => 'GEER', 'created_at' => NOW(),'updated_at' => NOW()],
        ];

        Filliere::insert($fillieres);
    }
}
