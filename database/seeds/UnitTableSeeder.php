<?php

use Illuminate\Database\Seeder;

class UnitTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('unit')->truncate();

        \DB::table('unit')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'company_id' => 3,
                    'user_id' => 3,
                    'type_id'    => 3,
                    'created_at' => '2017-06-16 10:05:36',
                    'updated_at' => '2017-07-04 15:30:05',
                ),
            1 =>
                array(
                    'id' => 2,
                    'company_id' => 3,
                    'user_id' => 3,
                    'type_id'    => 3,
                    'created_at' => '2017-06-16 10:05:59',
                    'updated_at' => '2017-06-16 10:05:59',
                ),
            2 =>
                array(
                    'id' => 3,
                    'company_id' => 3,
                    'user_id' => 3,
                    'type_id'    => 3,
                    'created_at' => '2017-06-16 10:06:10',
                    'updated_at' => '2017-06-16 10:06:10',
                )
            ));
    }
}
