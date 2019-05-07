<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('order')->truncate();

        \DB::table('order')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'Order1',
                    'status_id' => 1,
                    'currency_id' => 1,
                    'counterparty_id' => 1,
                    'amount' => 200,
                    // 'probability' => 80,
                    //'responsible' => 4,
                    'description' => 'New Order1',
                    // 'start_at' => '2017-06-17 00:00:00',
                    // 'end_at' => '2017-06-28 00:00:00',
                    'type_id' => 1,
                    // 'available_all' => 1,
                    'company_id' => 3,
                    'created_at' => '2017-06-16 13:25:27',
                    'updated_at' => '2017-07-03 10:42:11',
                    'quote_id' => 0,
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Order 2',
                    'status_id' => 1,
                    'currency_id' => 2,
                    'counterparty_id' => 1,
                    'amount' => 200,
                    // 'probability' => 80,
                    //'responsible' => 5,
                    'description' => 'New Order1',
                    // 'start_at' => '2017-06-17 00:00:00',
                    // 'end_at' => '2017-06-28 00:00:00',
                    'type_id' => 1,
                    // 'available_all' => 1,
                    'company_id' => 2,
                    'created_at' => '2017-06-16 13:25:27',
                    'updated_at' => '2017-06-16 13:25:27',
                    'quote_id' => 0,
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'Order 3',
                    'status_id' => 1,
                    'currency_id' => 1,
                    'counterparty_id' => 1,
                    'amount' => 200,
                    // 'probability' => 0,
                    //'responsible' => 0,
                    'description' => '',
                    // 'start_at' => '0000-00-00 00:00:00',
                    // 'end_at' => '0000-00-00 00:00:00',
                    'type_id' => 0,
                    // 'available_all' => 1,
                    'company_id' => 3,
                    'created_at' => '2017-07-03 13:37:00',
                    'updated_at' => '2017-07-03 13:37:00',
                    'quote_id' => 0,
                ),
            3 =>
                array(
                    'id' => 4,
                    'title' => 'Order 4',
                    'status_id' => 1,
                    'currency_id' => 1,
                    'counterparty_id' => 1,
                    'amount' => 200,
                    // 'probability' => 0,
                    // 'responsible' => 0,
                    'description' => '',
                    // 'start_at' => '0000-00-00 00:00:00',
                    // 'end_at' => '0000-00-00 00:00:00',
                    'type_id' => 0,
                    // 'available_all' => 1,
                    'company_id' => 3,
                    'created_at' => '2017-07-03 13:40:41',
                    'updated_at' => '2017-07-03 13:40:41',
                    'quote_id' => 0,
                ),
            4 =>
                array(
                    'id' => 5,
                    'title' => 'Order No.5',
                    'status_id' => 2,
                    'currency_id' => 2,
                    'counterparty_id' => 7,
                    'amount' => 425,
                    // 'probability' => 0,
                    // 'responsible' => 0,
                    'description' => '',
                    // 'start_at' => '0000-00-00 00:00:00',
                    // 'end_at' => '0000-00-00 00:00:00',
                    'type_id' => 0,
                    // 'available_all' => 1,
                    'company_id' => 4,
                    'created_at' => '2017-07-03 13:40:41',
                    'updated_at' => '2017-07-03 13:40:41',
                    'quote_id' => 3,
                ),
            5 =>
                array(
                    'id' => 6,
                    'title' => 'Order No.6',
                    'status_id' => 5,
                    'currency_id' => 2,
                    'counterparty_id' => 8,
                    'amount' => 225,
                    // 'probability' => 0,
                    // 'responsible' => 0,
                    'description' => '',
                    // 'start_at' => '0000-00-00 00:00:00',
                    // 'end_at' => '0000-00-00 00:00:00',
                    'type_id' => 0,
                    // 'available_all' => 1,
                    'company_id' => 5,
                    'created_at' => '2017-07-03 13:40:41',
                    'updated_at' => '2017-07-03 13:40:41',
                    'quote_id' => 4,
                ),
            6 =>
                array(
                    'id' => 7,
                    'title' => 'Order No.7',
                    'status_id' => 6,
                    'currency_id' => 2,
                    'counterparty_id' => 9,
                    'amount' => 327,
                    // 'probability' => 0,
                    // 'responsible' => 0,
                    'description' => '',
                    // 'start_at' => '0000-00-00 00:00:00',
                    // 'end_at' => '0000-00-00 00:00:00',
                    'type_id' => 0,
                    // 'available_all' => 1,
                    'company_id' => 3,
                    'created_at' => '2017-07-03 13:40:41',
                    'updated_at' => '2017-07-03 13:40:41',
                    'quote_id' => 5,
                ),
        ));


    }
}
