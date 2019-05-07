<?php

use Illuminate\Database\Seeder;

class SalutationI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('salutation_i18n')->truncate();

        \DB::table('salutation_i18n')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'Mrs',
                    'description' => NULL,
                    'salutation_id' => 1,
                    'language_id' => 1,
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Mr',
                    'description' => NULL,
                    'salutation_id' => 2,
                    'language_id' => 1,
                ),
        ));
    }
}
