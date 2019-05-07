<?php

use Illuminate\Database\Seeder;

class RegisterTokenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('register_token')->truncate();
        
        \DB::table('register_token')->insert(array (
            0 => 
            array (
                'id' => 1,
                'token' => '0168c207469d28c9ac047a4f5c161554',
                'company' => 3,
                'department' => 12,
                'user_id' => 0,
                'created_at' => '2017-06-16 11:35:50',
                'updated_at' => '2017-06-16 11:35:50',
            ),
            1 => 
            array (
                'id' => 2,
                'token' => '33d3c21e51b676c6700120bad6ba26cc',
                'company' => 3,
                'department' => 0,
                'user_id' => 0,
                'created_at' => '2017-06-16 13:02:25',
                'updated_at' => '2017-06-16 13:02:25',
            ),
            2 => 
            array (
                'id' => 3,
                'token' => '4b78d47532f776f613c3c24bdca37bc4',
                'company' => 0,
                'department' => 0,
                'user_id' => 0,
                'created_at' => '2017-06-29 16:35:22',
                'updated_at' => '2017-06-29 16:35:22',
            ),
        ));
        
        
    }
}