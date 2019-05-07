<?php

use Illuminate\Database\Seeder;

class OrderStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('order_status')->truncate();

        \DB::table('order_status')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    // 'title' => 'In progress',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-17 00:00:00',
                    'company_id' => 1,
                ),
            1 =>
                array(
                    'id' => 2,
                    // 'title' => 'Waiting for payment',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                    'company_id' => 2,
                ),
            2 =>
                array(
                    'id' => 3,
                    // 'title' => 'Delivered',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                    'company_id' => 3,
                ),
            3 =>
                array(
                    'id' => 4,
                    // 'title' => 'Rejected',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                    'company_id' => 1,
                ),
            4 =>
                array(
                    'id' => 5,
                    // 'title' => 'Refused by customer',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                    'company_id' => 2,
                ),
            5 =>
                array(
                    'id' => 6,
                    // 'title' => 'Returned',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                    'company_id' => 4,
                ),
        ));


    }
}
