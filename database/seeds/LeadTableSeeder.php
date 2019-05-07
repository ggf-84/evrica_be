<?php

use Illuminate\Database\Seeder;

class LeadTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('lead')->truncate();

        \DB::table('lead')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'Lead 1',
                    'description' => NULL,
                    'amount' => 1589.93,
                    // 'opportunity' => 200,
                    'status_id' => 2,
                    // 'status_description' => 'New comment',
                    'currency_id' => 1,
                    'user_id' => 4,
                    'company_id' => 3,
                    'counterparty_id' => 1,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'LEAD 1',
                    'description' => NULL,
                    'amount' => 1289.93,
                    // 'opportunity' => 200,
                    'status_id' => 2,
                    // 'status_description' => 'Comment',
                    'currency_id' => 1,
                    'user_id' => 5,
                    'company_id' => 2,
                    'counterparty_id' => 2,
                    'created_at' => '2017-06-19 09:47:48',
                    'updated_at' => '2017-06-19 09:47:48',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'LEAD 2',
                    'description' => NULL,
                    'amount' => 1189.93,
                    // 'opportunity' => 150,
                    'status_id' => 3,
                    // 'status_description' => 'Comment',
                    'currency_id' => 2,
                    'user_id' => 6,
                    'company_id' => 4,
                    'counterparty_id' => 3,
                    'created_at' => '2017-06-19 09:47:48',
                    'updated_at' => '2017-06-19 09:47:48',
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'LEAD 3',
                    'description' => NULL,
                    'amount' => 3189.93,
                    // 'opportunity' => 1250,
                    'status_id' => 3,
                    // 'status_description' => 'Comment',
                    'currency_id' => 2,
                    'user_id' => 7,
                    'company_id' => 5,
                    'counterparty_id' => 3,
                    'created_at' => '2017-06-19 09:47:48',
                    'updated_at' => '2017-06-19 09:47:48',
                ),
            4 =>
                array(
                    'id' => 5,
                    'name' => 'LEAD 4',
                    'description' => NULL,
                    'amount' => 2139.93,
                    // 'opportunity' => 328,
                    'status_id' => 3,
                    // 'status_description' => 'Comment',
                    'currency_id' => 2,
                    'user_id' => 8,
                    'company_id' => 3,
                    'counterparty_id' => 4,
                    'created_at' => '2017-06-19 09:47:48',
                    'updated_at' => '2017-06-19 09:47:48',
                ),
        ));


    }
}
