<?php

use Illuminate\Database\Seeder;

class QuoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('quote')->truncate();

        \DB::table('quote')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'Quote 1',
                    'amount' => 13.22,
                    'status_id' => 1,
                    'currency_id' => 1,
                    'user_id' => 1,
                    'due_at' => NULL,
                    'available_all' => 0,
                    'counterparty_id' => 1,
                    'content' => NULL,
                    'conditions' => NULL,
                    'comment' => NULL,
                    'company_id' => 3,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Quote 2',
                    'amount' => 23.22,
                    'status_id' => 2,
                    'currency_id' => 2,
                    'user_id' => 2,
                    'due_at' => NULL,
                    'available_all' => 0,
                    'counterparty_id' => 2,
                    'content' => NULL,
                    'conditions' => NULL,
                    'comment' => NULL,
                    'company_id' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'Quote 3',
                    'amount' => 33.22,
                    'status_id' => 3,
                    'currency_id' => 3,
                    'user_id' => 3,
                    'due_at' => NULL,
                    'available_all' => 0,
                    'counterparty_id' => 3,
                    'content' => NULL,
                    'conditions' => NULL,
                    'comment' => NULL,
                    'company_id' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));
    }
}
