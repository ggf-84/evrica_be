<?php

use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('role_permission')->truncate();

        \DB::table('role_permission')->insert(array(

            0 =>
                array(
                    'role_id' => 7,
                    'permission_id' => 15,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            1 =>
                array(
                    'role_id' => 6,
                    'permission_id' => 12,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            2 =>
                array(
                    'role_id' => 5,
                    'permission_id' => 17,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            3 =>
                array(
                    'role_id' => 5,
                    'permission_id' => 16,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            4 =>
                array(
                    'role_id' => 5,
                    'permission_id' => 15,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            5 =>
                array(
                    'role_id' => 5,
                    'permission_id' => 14,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            6 =>
                array(
                    'role_id' => 5,
                    'permission_id' => 13,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            7 =>
                array(
                    'role_id' => 5,
                    'permission_id' => 12,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            8 =>
                array(
                    'role_id' => 4,
                    'permission_id' => 9,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            9 =>
                array(
                    'role_id' => 4,
                    'permission_id' => 10,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            10 =>
                array(
                    'role_id' => 4,
                    'permission_id' => 11,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            11 =>
                array(
                    'role_id' => 9,
                    'permission_id' => 21,
                    'value' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
        ));

    }
}
