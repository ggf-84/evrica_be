<?php

use Illuminate\Database\Seeder;

class UserDevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('user_devices')->truncate();

        \DB::table('user_devices')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'token' => '294913EC-6100-42E8-8C2D-E9F68F286ADE',
                    'user_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'token' => '294913EC-6100-42E8-8C2D-E9D68F286ADE',
                    'user_id' => 4,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'token' => '294913EC-6100-42E8-8C2D-E9X68F286ADE',
                    'user_id' => 5,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            3 =>
                array(
                    'id' => 4,
                    'token' => '294913EC-6100-42E8-8C2D-E1F68F286ADE',
                    'user_id' => 1,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
        ));
    }
}
