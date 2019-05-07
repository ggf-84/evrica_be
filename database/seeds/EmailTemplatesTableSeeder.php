<?php

use Illuminate\Database\Seeder;

class EmailTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_templates')->truncate();
        
        \DB::table('email_templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'template' => 'Invoice',
                'created_at' => '2018-01-30 11:18:05',
                'updated_at' => '2018-01-30 11:18:05',
            ),
            1 => 
            array (
                'id' => 2,
                'template' => 'Bank',
                'created_at' => '2018-01-30 11:20:38',
                'updated_at' => '2018-01-30 11:20:38',
            ),
            2 => 
            array (
                'id' => 3,
                'template' => 'Credit',
                'created_at' => '2018-01-30 11:21:24',
                'updated_at' => '2018-01-30 11:21:24',
            ),
        ));
        
        
    }
}