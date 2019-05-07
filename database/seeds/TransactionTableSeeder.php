<?php

use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('transaction')->truncate();

        \DB::table('transaction')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'gateway_id' => 1,
                    'amount' => 123.03,
                    'type_id' => 1,
                    'status_id' => 1,
                    'currency_id' => 1,
                    'token' => '$2y$10$2yaFckTeJhMsSYEQO9QCgd',
                    'created_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'gateway_id' => 2,
                    'amount' => 2233.03,
                    'type_id' => 2,
                    'status_id' => 2,
                    'currency_id' => 2,
                    'token' => '$2y$10$s2yaF1ckTeJhMsSYEQO9QCgd',
                    'created_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'gateway_id' => 4,
                    'amount' => 12213.03,
                    'type_id' => 4,
                    'status_id' => 4,
                    'currency_id' => 4,
                    'token' => '$2y$130$2yaFckTeJhMsSYEQO9QCgd',
                    'created_at' => '2017-06-16 14:30:13',
                ),
        ));
    }
}
