<?php

use Illuminate\Database\Seeder;

class OrdersProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('order_products')->truncate();

        \DB::table('order_products')->insert(array(
            0 =>
            array(
                'id' => 2,
                'order_id' => 2,
                'product_id' => 2,
                'quantity' => 1,
                'price' => 200,
                'unit_id' => 1,
                'total' => 200,
                'created_at' => '2017-06-16 13:25:27',
                'updated_at' => '2017-06-16 13:25:27',
            ),
            1 =>
            array(
                'id' => 28,
                'order_id' => 1,
                'product_id' => 1,
                'quantity' => 0,
                'price' => 0,
                'unit_id' => 0,
                'total' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 29,
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 0,
                'price' => 0,
                'unit_id' => 0,
                'total' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 30,
                'order_id' => 1,
                'product_id' => 3,
                'quantity' => 0,
                'price' => 0,
                'unit_id' => 0,
                'total' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 31,
                'order_id' => 1,
                'product_id' => 4,
                'quantity' => 0,
                'price' => 0,
                'unit_id' => 0,
                'total' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 32,
                'order_id' => 7,
                'product_id' => 6,
                'quantity' => 20,
                'price' => 327,
                'unit_id' => 0,
                'total' => 6540,
                'created_at' => '2017-11-16 13:25:27',
                'updated_at' => '2017-11-16 13:25:27',
            ),
            6 =>
            array(
                'id' => 33,
                'order_id' => 6,
                'product_id' => 5,
                'quantity' => 11,
                'price' => 225,
                'unit_id' => 0,
                'total' => 2475,
                'created_at' => '2017-11-16 13:25:27',
                'updated_at' => '2017-11-16 13:25:27',
            ),
            7 =>
            array(
                'id' => 34,
                'order_id' => 5,
                'product_id' => 4,
                'quantity' => 1,
                'price' => 425,
                'unit_id' => 0,
                'total' => 425,
                'created_at' => '2017-11-16 13:25:27',
                'updated_at' => '2017-11-16 13:25:27',
            ),
        ));


    }
}
