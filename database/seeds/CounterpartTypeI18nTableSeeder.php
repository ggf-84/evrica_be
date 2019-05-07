<?php

use Illuminate\Database\Seeder;

class CounterpartTypeI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('counterparty_types_i18n')->truncate();

        \DB::table('counterparty_types_i18n')->insert(array(

            0 =>
                array(
                    'id' => 1,
                    'title' => 'Client',
                    'description' => NULL,
                    'type_id' => 1,
                    'language_id' => 1,
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Organization',
                    'description' => NULL,
                    'type_id' => 2,
                    'language_id' => 1,
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'Company',
                    'description' => NULL,
                    'type_id' => 3,
                    'language_id' => 1,
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
        ));
    }
}
