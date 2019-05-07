<?php

use Illuminate\Database\Seeder;

class MeasureUnitTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('measure_unit')->truncate();

        \DB::table('measure_unit')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'created_at' => '2017-06-16 10:21:28',
                    'updated_at' => '2017-06-16 10:21:28',
                ),
            1 =>
                array(
                    'id' => 2,
                    'created_at' => '2017-06-16 10:21:28',
                    'updated_at' => '2017-06-16 10:21:28',
                ),
            2 =>
                array(
                    'id' => 3,
                    'created_at' => '2017-06-16 10:21:28',
                    'updated_at' => '2017-06-16 10:21:28',
                ),
            3 =>
                array(
                    'id' => 4,
                    'created_at' => '2017-06-16 10:21:28',
                    'updated_at' => '2017-06-16 10:21:28',
                ),
            4 =>
                array(
                    'id' => 5,
                    'created_at' => '2017-06-16 10:21:28',
                    'updated_at' => '2017-06-16 10:21:28',
                ),
            5 =>
                array(
                    'id' => 6,
                    'created_at' => '2017-06-16 10:21:28',
                    'updated_at' => '2017-06-16 10:21:28',
                ),
            6 =>
                array(
                    'id' => 7,
                    'created_at' => '2017-06-16 10:21:28',
                    'updated_at' => '2017-06-16 10:21:28',
                ),
        ));



    }
}
