<?php

use Illuminate\Database\Seeder;

class PredefinedFiltersI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('predefined_filters_i18n')->truncate();

        \DB::table('predefined_filters_i18n')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'title' => 'Costa Rica',
                    'filter_id' => 1,
                    'language_id' => 1,
                    'created_at' => '2017-11-16 10:45:32',
                    'updated_at' => '2017-11-16 10:45:32',
                ),
            1 =>
                array (
                    'id' => 2,
                    'title' => 'Costa Rica RU',
                    'filter_id' => 1,
                    'language_id' => 3,
                    'created_at' => '2017-11-16 10:45:32',
                    'updated_at' => '2017-11-16 10:45:32',
                ),
            2 =>
                array (
                    'id' => 3,
                    'title' => 'Inactiv+Finlanda',
                    'filter_id' => 2,
                    'language_id' => 1,
                    'created_at' => '2017-11-16 10:45:32',
                    'updated_at' => '2017-11-16 10:45:32',
                ),
            3 =>
                array (
                    'id' => 4,
                    'title' => 'Inactiv+Finlanda RU',
                    'filter_id' => 2,
                    'language_id' => 3,
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            4 =>
                array (
                    'id' => 5,
                    'title' => 'Inactiv Tax ID<100',
                    'filter_id' => 3,
                    'language_id' => 1,
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                )
        ));
    }
}
