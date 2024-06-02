<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $modules = [
            // Filliere 1
            ['id' => 1,'filliere_id' => 1,'teacher_id' => 1 ,'name' => 'Module 1 for TDIA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 2,'filliere_id' => 1,'teacher_id' => 1 , 'name' => 'Module 2 for TDIA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 3,'filliere_id' => 1,'teacher_id' => 1 , 'name' => 'Module 3 for TDIA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 4,'filliere_id' => 1,'teacher_id' => 2 , 'name' => 'Module 4 for TDIA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 5,'filliere_id' => 1,'teacher_id' => 2 , 'name' => 'Module 5 for TDIA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 6,'filliere_id' => 1,'teacher_id' => 2 , 'name' => 'Module 6 for TDIA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            
            // Filliere 2
            ['id' => 7,'filliere_id' => 2,'teacher_id' => 3 , 'name' => 'Module 1 for INFO', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 8,'filliere_id' => 2,'teacher_id' => 3 , 'name' => 'Module 2 for INFO', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 9,'filliere_id' => 2,'teacher_id' => 3 , 'name' => 'Module 3 for INFO', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 10,'filliere_id' => 2,'teacher_id' => 4 , 'name' => 'Module 4 for INFO', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 11,'filliere_id' => 2,'teacher_id' => 4 , 'name' => 'Module 5 for INFO', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 12,'filliere_id' => 2,'teacher_id' => 4 , 'name' => 'Module 6 for INFO', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            

            // Filliere 3
            ['id' => 13,'filliere_id' => 3,'teacher_id' => 5 , 'name' => 'Module 1 for DATA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 14,'filliere_id' => 3,'teacher_id' => 5 , 'name' => 'Module 2 for DATA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 15,'filliere_id' => 3,'teacher_id' => 5 , 'name' => 'Module 3 for DATA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW()],
            ['id' => 16,'filliere_id' => 3,'teacher_id' => 6 , 'name' => 'Module 4 for DATA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 17,'filliere_id' => 3,'teacher_id' => 6 , 'name' => 'Module 5 for DATA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 18,'filliere_id' => 3,'teacher_id' => 6 , 'name' => 'Module 6 for DATA', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            

            // Filliere 4
            ['id' => 19,'filliere_id' => 4,'teacher_id' => 7 , 'name' => 'Module 1 for G2E', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 20,'filliere_id' => 4,'teacher_id' => 7 , 'name' => 'Module 2 for G2E', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 21,'filliere_id' => 4,'teacher_id' => 7 , 'name' => 'Module 3 for G2E', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 22,'filliere_id' => 4,'teacher_id' => 8 , 'name' => 'Module 4 for G2E', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 23,'filliere_id' => 4,'teacher_id' => 8, 'name' => 'Module 5 for G2E', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 24,'filliere_id' => 4,'teacher_id' => 8 , 'name' => 'Module 6 for G2E', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],

            // Filliere 5
            ['id' => 25,'filliere_id' => 5,'teacher_id' => 9 , 'name' => 'Module 1 for CIVIL', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 26,'filliere_id' => 5,'teacher_id' => 9 , 'name' => 'Module 2 for CIVIL', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 27,'filliere_id' => 5,'teacher_id' => 9 , 'name' => 'Module 3 for CIVIL', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 28,'filliere_id' => 5,'teacher_id' => 9 , 'name' => 'Module 4 for CIVIL', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 29,'filliere_id' => 5,'teacher_id' => 9 , 'name' => 'Module 5 for CIVIL', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 30,'filliere_id' => 5,'teacher_id' => 10 , 'name' => 'Module 6 for CIVIL', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            

            // Filliere 6
            ['id' => 31,'filliere_id' => 6,'teacher_id' => 10 , 'name' => 'Module 1 for GEER', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 32,'filliere_id' => 6,'teacher_id' => 10 , 'name' => 'Module 2 for GEER', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 33,'filliere_id' => 6,'teacher_id' => 10 , 'name' => 'Module 3 for GEER', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 34,'filliere_id' => 6,'teacher_id' => 10 , 'name' => 'Module 4 for GEER', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 35,'filliere_id' => 6,'teacher_id' => 10 , 'name' => 'Module 5 for GEER', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            ['id' => 36,'filliere_id' => 6,'teacher_id' => 10 , 'name' => 'Module 6 for GEER', 'Data' => '', 'created_at' => NOW(),'updated_at'=> NOW() ],
            
        ];

        Module::insert($modules);
    }
}
