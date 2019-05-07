<?php

use Illuminate\Database\Seeder;

class RateHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('rate_history')->truncate();

        \DB::table('rate_history')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'rate_id'=> 1,
                    'tax_rate' => 27.45,
                    'amount' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'rate_id' => 2,
                    'tax_rate' => 22.25,
                    'amount' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'rate_id' => 3,
                    'tax_rate' => 0.24,
                    'amount' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));
    }
}
