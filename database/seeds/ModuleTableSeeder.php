<?php

use Illuminate\Database\Seeder;

class ModuleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('module')->truncate();
        
        \DB::table('module')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Product',
                'code' => 'product',
                'created_at' => '2017-06-16 17:40:38',
                'updated_at' => '2017-06-17 18:42:51',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Orders',
                'code' => 'order',
                'created_at' => '2017-06-17 19:41:51',
                'updated_at' => '2017-06-17 19:46:50',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Invoice',
                'code' => 'invoice',
                'created_at' => '2017-06-16 16:34:40',
                'updated_at' => '2017-06-17 15:43:40',
            ),
        ));
        
        
    }
}