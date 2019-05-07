<?php

use Illuminate\Database\Seeder;

class UserSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('user_settings')->truncate();

        \DB::table('user_settings')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'setting_id' => 1,
                    'user_id' => 6,
                    'value' => 1,
                    'device_id' => 1,
                    'created_at' => '2017-11-17 09:45:32',
                    'updated_at' => '2017-11-17 09:45:32',
                ),
            1 =>
                array(
                    'id' => 2,
                    'setting_id' => 1,
                    'user_id' => 5,
                    'value' => 2,
                    'device_id' => 2,
                    'created_at' => '2017-11-17 09:45:32',
                    'updated_at' => '2017-11-17 09:45:32',
                ),
            2 =>
                array(
                    'id' => 3,
                    'setting_id' => 1,
                    'user_id' => 3,
                    'value' => 3,
                    'device_id' => 3,
                    'created_at' => '2017-11-17 09:45:32',
                    'updated_at' => '2017-11-17 09:45:32',
                ),
            3 =>
                array(
                    'id' => 4,
                    'setting_id' => 2,
                    'user_id' => 3,
                    'value' => 320,
                    'device_id' => 4,
                    'created_at' => '2017-11-17 09:45:32',
                    'updated_at' => '2017-11-17 09:45:32',
                ),
        ));
    }
}
