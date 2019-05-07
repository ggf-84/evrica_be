<?php

use Illuminate\Database\Seeder;

class TaxRateTypeContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        \DB::table('tax_rate_type_i18n')->truncate();

        \DB::table('tax_rate_type_i18n')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'Type 1',
                    'description' => NULL,
                    'type_id' => 1,
                    'language_id' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Type 2',
                    'description' => NULL,
                    'type_id' => 2,
                    'language_id' => 3,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'Type 3',
                    'description' => NULL,
                    'type_id' => 3,
                    'language_id' => 4,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));


    }
}
