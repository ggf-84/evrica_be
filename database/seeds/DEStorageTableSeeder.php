<?php

use Illuminate\Database\Seeder;

class DeStorageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('de_storage')->delete();
        
        \DB::table('de_storage')->insert(array (
            0 => 
            array (
                'id' => 7,
                'path' => 'dataexchange/3',
                'company_id' => 3,
                'is_available' => 1,
                'last_checked' => '2018-05-04 14:35:18',
                'created_at' => '2018-05-03 11:27:01',
                'updated_at' => '2018-05-04 14:35:18',
            ),
            1 => 
            array (
                'id' => 8,
                'path' => 'dataexchange/data',
                'company_id' => 3,
                'is_available' => 1,
                'last_checked' => NULL,
                'created_at' => '2018-05-04 08:27:17',
                'updated_at' => '2018-05-04 08:27:17',
            ),
        ));
        
        
    }
}