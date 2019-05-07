<?php

use Illuminate\Database\Seeder;

class CounterpartGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('counterparty_groups')->truncate();

        \DB::table('counterparty_groups')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'title' => 'Client payers',
                        'description' => NULL,
                        'company_id' => 3,
                        'active_tax' => 0,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                1 =>
                    array(
                        'id' => 2,
                        'title' => 'Buyers',
                        'description' => NULL,
                        'company_id' => 3,
                        'active_tax' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                2 =>
                    array(
                        'id' => 3,
                        'title' => 'Partners',
                        'description' => NULL,
                        'company_id' => 3,
                        'active_tax' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                3 =>
                    array(
                        'id' => 4,
                        'title' => 'Client payers',
                        'description' => NULL,
                        'company_id' => 1,
                        'active_tax' => 0,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                4 =>
                    array(
                        'id' => 5,
                        'title' => 'Buyers',
                        'description' => NULL,
                        'company_id' => 2,
                        'active_tax' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                5 =>
                    array(
                        'id' => 6,
                        'title' => 'Partners',
                        'description' => NULL,
                        'company_id' => 4,
                        'active_tax' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                6 =>
                    array(
                        'id' => 7,
                        'title' => 'Buyers',
                        'description' => NULL,
                        'company_id' => 2,
                        'active_tax' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                7 =>
                    array(
                        'id' => 8,
                        'title' => 'Partners',
                        'description' => NULL,
                        'company_id' => 5,
                        'active_tax' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
            ));

    }
}
