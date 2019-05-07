<?php

use Illuminate\Database\Seeder;

class CounterpartyBalanceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('counterparty_balance')->truncate();
        
        \DB::table('counterparty_balance')->insert(array (
            0 => 
            array (
                'id' => 1,
                'amount' => '2.00',
                'counterparty_id' => 3,
                'created_at' => '2018-01-31 15:55:20',
                'updated_at' => '2018-01-31 15:55:20',
            ),
            1 => 
            array (
                'id' => 2,
                'amount' => '3333.00',
                'counterparty_id' => 8,
                'created_at' => '2018-01-31 15:55:24',
                'updated_at' => '2018-01-31 15:55:24',
            ),
            2 => 
            array (
                'id' => 3,
                'amount' => '31314.44',
                'counterparty_id' => 10,
                'created_at' => '2018-01-31 15:56:31',
                'updated_at' => '2018-01-31 15:56:31',
            ),
        ));
        
    }
}