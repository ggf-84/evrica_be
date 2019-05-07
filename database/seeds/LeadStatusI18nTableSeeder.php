<?php

use Illuminate\Database\Seeder;

class LeadStatusI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('lead_status_i18n')->truncate();

        \DB::table('lead_status_i18n')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Not Treated',
                'description' => NULL,
                'status_id' => 1,
                'language_id' => 1,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'In Work',
                'description' => NULL,
                'status_id' => 2,
                'language_id' => 1,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'Treated',
                'description' => NULL,
                'status_id' => 3,
                'language_id' => 1,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'Bad-Quality Lead',
                'description' => NULL,
                'status_id' => 4,
                'language_id' => 1,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
        ));
    }
}
