<?php

use Illuminate\Database\Seeder;

class ErrorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('error')->truncate();

        \DB::table('error')->insert(array(

            0 =>
                array(
                    'id' => 1,
                    'code' => '404',
                    'type' => 'http',
                    'parent_id' => 1,
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
            1 =>
                array(
                    'id' => 2,
                    'code' => '500',
                    'type' => 'http',
                    'parent_id' => 1,
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
            2 =>
                array(
                    'id' => 3,
                    'code' => '401',
                    'type' => 'http',
                    'parent_id' => 1,
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),


        ));
    }
}
