<?php

use Illuminate\Database\Seeder;

class DepartmentsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('department_users')->truncate();

        \DB::table('department_users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'department_id' => 1,
                    'user_id' => 4,
                    'created_at' => '2017-06-16 11:41:43',
                    'updated_at' => '2017-06-16 11:41:43',
                ),
            1 =>
                array(
                    'id' => 2,
                    'department_id' => 1,
                    'user_id' => 1,
                    'created_at' => '2017-07-04 15:30:05',
                    'updated_at' => '2017-07-04 15:30:05',
                ),
            2 =>
                array(
                    'id' => 3,
                    'department_id' => 1,
                    'user_id' => 2,
                    'created_at' => '2017-07-04 15:30:05',
                    'updated_at' => '2017-07-04 15:30:05',
                ),
            3 =>
                array(
                    'id' => 4,
                    'department_id' => 2,
                    'user_id' => 6,
                    'created_at' => '2017-07-04 15:30:05',
                    'updated_at' => '2017-07-04 15:30:05',
                ),
            4 =>
                array(
                    'id' => 5,
                    'department_id' => 3,
                    'user_id' => 7,
                    'created_at' => '2017-07-04 15:30:05',
                    'updated_at' => '2017-07-04 15:30:05',
                ),
            5 =>
                array(
                    'id' => 6,
                    'department_id' => 4,
                    'user_id' => 8,
                    'created_at' => '2017-07-04 15:30:05',
                    'updated_at' => '2017-07-04 15:30:05',
                ),
            6 =>
                array(
                    'id' => 7,
                    'department_id' => 1,
                    'user_id' => 3,
                    'created_at' => '2017-07-04 15:30:05',
                    'updated_at' => '2017-07-04 15:30:05',
                ),
        ));


    }
}
