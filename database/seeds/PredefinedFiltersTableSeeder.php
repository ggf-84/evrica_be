<?php

use Illuminate\Database\Seeder;

class PredefinedFiltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('predefined_filters')->truncate();

        \DB::table('predefined_filters')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'company_id' => 3,
                    'entity' => 'counterparties',
                    'filter' => '_filters[]=country_id=51'
                ),
            1 =>
                array (
                    'id' => 2,
                    'company_id' => 0,
                    'entity' => 'counterparties',
                    'filter' => '_filters[]=country_id=71&_filters[]=auth_id=0'
                ),
            2 =>
                array (
                    'id' => 3,
                    'company_id' => 0,
                    'entity' => 'counterparties',
                    'filter' => '_filters[]=active_tax=0&_filters[]=id-lt=100'
                ),
            3 =>
                array (
                    'id' => 4,
                    'company_id' => 0,
                    'entity' => 'order',
                    'filter' => '',
                ),
            4 =>
                array (
                    'id' => 5,
                    'company_id' => 0,
                    'entity' => 'counterparties',
                    'filter' => '_filters[]=created_at-between=2017-07-13 24:00:00,2018-01-09 14:49:25'
                ),
            5 =>
                array (
                    'id' => 6,
                    'company_id' => 0,
                    'entity' => 'users',
                    'filter' => ''
                ),
        ));
    }
}
