<?php

use Illuminate\Database\Seeder;

class SystemSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('system_settings')->truncate();

        \DB::table('system_settings')->insert(array(

            0 =>
                array(
                    'id' => 1,
                    'setting_id' => 1,
                    'value' => 1,
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
        ));
    }
}
