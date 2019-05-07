<?php

use Illuminate\Database\Seeder;

class QuoteProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('quote_products')->truncate();

        \DB::table('quote_products')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'price' => 123.45,
                    'quote_id' => 1,
                    'product_id' => 1,
                    'unit_id' => 1,
                    'quantity' => 322,
                    'total' => 322,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'price' => 3123.45,
                    'quote_id' => 2,
                    'product_id' => 2,
                    'unit_id' => 2,
                    'quantity' => 1322,
                    'total' => 3222,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'price' => 18523.45,
                    'quote_id' => 3,
                    'product_id' => 3,
                    'unit_id' => 3,
                    'quantity' => 3182,
                    'total' => 48322,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));
    }
}
