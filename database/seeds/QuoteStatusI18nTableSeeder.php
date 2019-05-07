<?php

use Illuminate\Database\Seeder;

class QuoteStatusI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('quote_status_i18n')->truncate();

        \DB::table('quote_status_i18n')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'Accepted',
                    'description' => NULL,
                    'status_id' => 1,
                    'language_id' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Rejected',
                    'description' => NULL,
                    'status_id' => 2,
                    'language_id' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'In Progress',
                    'description' => NULL,
                    'status_id' => 3,
                    'language_id' => 2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));
    }
}
