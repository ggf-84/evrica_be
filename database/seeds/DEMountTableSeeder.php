<?php

use Illuminate\Database\Seeder;

class DeMountTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('de_mount')->delete();
        
        \DB::table('de_mount')->insert(array (
            0 => 
            array (
                'id' => 1,
                'mount_point' => '/data/3',
                'storage_id' => 1,
                'user_id' => NULL,
                'department_id' => NULL,
                'company_id' => NULL,
                'counterparty_id' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 341,
                'mount_point' => '/data',
                'storage_id' => NULL,
                'user_id' => NULL,
                'department_id' => NULL,
                'company_id' => 3,
                'counterparty_id' => NULL,
                'created_at' => '2018-05-04 14:35:18',
                'updated_at' => '2018-05-04 14:35:18',
            ),
            2 => 
            array (
                'id' => 342,
                'mount_point' => '/user3',
                'storage_id' => NULL,
                'user_id' => 3,
                'department_id' => NULL,
                'company_id' => NULL,
                'counterparty_id' => NULL,
                'created_at' => '2018-05-04 14:35:18',
                'updated_at' => '2018-05-04 14:35:18',
            ),
        ));
        
        
    }
}