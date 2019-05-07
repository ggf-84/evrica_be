<?php

use Illuminate\Database\Seeder;

class InvoiceProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('invoice_products')->truncate();

        \DB::table('invoice_products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'invoice_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
                'price' => 200,
                'unit_id' => 1,
                'total' => 200,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),

            1 =>
            array (
                'id' => 2,
                'invoice_id' => 2,
                'product_id' => 2,
                'quantity' => 21,
                'price' => 200,
                'unit_id' => 2,
                'total' => 2200,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),

            2 =>
            array (
                'id' => 3,
                'invoice_id' => 3,
                'product_id' => 3,
                'quantity' => 3,
                'price' => 212.10,
                'unit_id' => 3,
                'total' => 23,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
        ));
    }
}
