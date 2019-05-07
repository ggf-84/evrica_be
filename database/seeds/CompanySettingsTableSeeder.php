<?php

use Illuminate\Database\Seeder;

class CompanySettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('company_settings')->truncate();

        \DB::table('company_settings')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'setting_id' => 1,
                    'value' => 2,
                    'company_id' => 3,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            1 =>
                array(
                    'id' => 2,
                    'setting_id' => 2,
                    'value' => 400,
                    'company_id' => 3,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            2 =>
                array(
                    'id' => 3,
                    'setting_id' => 3,
                    'value' => 1,
                    'company_id' => 3,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            3 =>
                array(
                    'id' => 4,
                    'setting_id' => 4,
                    'value' => 1680,
                    'company_id' => 3,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            4 =>
                array(
                    'id' => 5,
                    'setting_id' => 1,
                    'value' => 1,
                    'company_id' => 4,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            5 =>
                array(
                    'id' => 6,
                    'setting_id' => 2,
                    'value' => 300,
                    'company_id' => 5,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            6 =>
                array(
                    'id' => 7,
                    'setting_id' => 3,
                    'value' => 1,
                    'company_id' => 3,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),

        ));


    }
}
