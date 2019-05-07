<?php

use Illuminate\Database\Seeder;

class TaxRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('tax_rate')->truncate();

        \DB::table('tax_rate')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'state_id' => NULL,
                    'country_id' => 97,
                    'tax_rate' => 20,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'state_id' => NULL,
                    'country_id' => 176,
                    'tax_rate' => 10,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'state_id' => NULL,
                    'country_id' => 147,
                    'tax_rate' => 15,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));


    }
}
