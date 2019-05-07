<?php

use Illuminate\Database\Seeder;

class OrderStatusI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('order_status_i18n')->truncate();

        \DB::table('order_status_i18n')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'In progress',
                    'description' => NULL,
                    'status_id' => 1,
                    // 'created_at' => '2017-06-16 00:00:00',
                    // 'updated_at' => '2017-06-17 00:00:00',

                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Waiting for payment',
                    'description' => NULL,
                    'status_id' => 2,
                    // 'created_at' => '2017-06-16 00:00:00',
                    // 'updated_at' => '2017-06-16 00:00:00',

                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'Delivered',
                    'description' => NULL,
                    'status_id' => 3,
                    // 'created_at' => '2017-06-16 00:00:00',
                    // 'updated_at' => '2017-06-16 00:00:00',

                ),
            3 =>
                array(
                    'id' => 4,
                    'title' => 'Rejected',
                    'description' => NULL,
                    'status_id' => 4,
                    // 'created_at' => '2017-06-16 00:00:00',
                    // 'updated_at' => '2017-06-16 00:00:00',

                ),
            4 =>
                array(
                    'id' => 5,
                    'title' => 'Refused by customer',
                    'description' => NULL,
                    'status_id' => 5,
                    // 'created_at' => '2017-06-16 00:00:00',
                    // 'updated_at' => '2017-06-16 00:00:00',

                ),
            5 =>
                array(
                    'id' => 6,
                    'title' => 'Returned',
                    'description' => NULL,
                    'status_id' => 6,
                    // 'created_at' => '2017-06-16 00:00:00',
                    // 'updated_at' => '2017-06-16 00:00:00',

                ),
        ));
    }
}
