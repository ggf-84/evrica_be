<?php

use Illuminate\Database\Seeder;

class RateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('rate')->truncate();

        \DB::table('rate')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'tax_rate' => 27.43,
                    'amount' => 1,
                    'main_currency_id' => 1,
                    'second_currency_id' => 7,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'tax_rate' => 22.23,
                    'amount' => 1,
                    'main_currency_id' => 2,
                    'second_currency_id' => 3,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'tax_rate' => 0.22,
                    'amount' => 1,
                    'main_currency_id' => 6,
                    'second_currency_id' => 3,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));
    }
}
