<?php

use Illuminate\Database\Seeder;

class CompanyFiltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_filters')->truncate();

        \DB::table('company_filters')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'company_id' => 3,
                    'filter_id' => 1,
                    'created_at' => '2017-11-16 10:45:32',
                    'updated_at' => '2017-11-16 10:45:32',
                ),
            1 =>
                array (
                    'id' => 2,
                    'company_id' => 3,
                    'filter_id' => 2,
                    'created_at' => '2017-11-16 10:45:32',
                    'updated_at' => '2017-11-16 10:45:32',
                ),
            2 =>
                array (
                    'id' => 3,
                    'company_id' => 3,
                    'filter_id' => 3,
                    'created_at' => '2017-11-16 10:45:32',
                    'updated_at' => '2017-11-16 10:45:32',
                ),
            3 =>
                array (
                    'id' => 4,
                    'company_id' => 3,
                    'filter_id' => 4,
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            4 =>
                array (
                    'id' => 5,
                    'company_id' => 3,
                    'filter_id' => 5,
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            5 =>
                array (
                    'id' => 6,
                    'company_id' => 3,
                    'filter_id' => 6,
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                )
        ));
    }
}
