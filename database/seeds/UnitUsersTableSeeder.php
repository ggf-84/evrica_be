<?php

use Illuminate\Database\Seeder;

class UnitUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('unit_users')->truncate();

        \DB::table('unit_users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'unit_id' => 3,
                    'user_id' => 5,
                    'created_at' => '2017-06-16 10:05:36',
                    'updated_at' => '2017-07-04 15:30:05',
                ),
            1 =>
                array(
                    'id' => 2,
                    'unit_id' => 2,
                    'user_id' => 2,
                    'created_at' => '2017-06-16 10:05:36',
                    'updated_at' => '2017-07-04 15:30:05',
                ),
            2 =>
                array(
                    'id' => 3,
                    'unit_id' => 1,
                    'user_id' => 5,
                    'created_at' => '2017-06-16 10:05:36',
                    'updated_at' => '2017-07-04 15:30:05',
                )
            ));
    }
}
