<?php

use Illuminate\Database\Seeder;

class ContactPositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contact_position')->truncate();

        \DB::table('contact_position')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'company_id' => 1,
                        'created_at' => '2017-06-19 09:45:32',
                        'updated_at' => '2017-06-19 09:45:32',
                    ),
                1 =>
                    array(
                        'id' => 2,
                        'company_id' => 2,
                        'created_at' => '2017-06-19 09:45:32',
                        'updated_at' => '2017-06-19 09:45:32',
                    ),
                2 =>
                    array(
                        'id' => 3,
                        'company_id' => 3,
                        'created_at' => '2017-06-19 09:45:32',
                        'updated_at' => '2017-06-19 09:45:32',
                    ),
                3 =>
                    array(
                        'id' => 4,
                        'company_id' => 1,
                        'created_at' => '2017-06-19 09:45:32',
                        'updated_at' => '2017-06-19 09:45:32',
                    ),
                4 =>
                    array(
                        'id' => 5,
                        'company_id' => 2,
                        'created_at' => '2017-06-19 09:45:32',
                        'updated_at' => '2017-06-19 09:45:32',
                    ),
                5 =>
                    array(
                        'id' => 6,
                        'company_id' => 3,
                        'created_at' => '2017-06-19 09:45:32',
                        'updated_at' => '2017-06-19 09:45:32',
                    ),
                6 =>
                    array(
                        'id' => 7,
                        'company_id' => 1,
                        'created_at' => '2017-06-19 09:45:32',
                        'updated_at' => '2017-06-19 09:45:32',
                    ),
                7 =>
                    array(
                        'id' => 8,
                        'company_id' => 2,
                        'created_at' => '2017-06-19 09:45:32',
                        'updated_at' => '2017-06-19 09:45:32',
                    ),
                8 =>
                    array(
                        'id' => 9,
                        'company_id' => 3,
                        'created_at' => '2017-06-19 09:45:32',
                        'updated_at' => '2017-06-19 09:45:32',
                    ),
            ));
    }
}
