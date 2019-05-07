<?php

use Illuminate\Database\Seeder;

class LeadProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('lead_products')->truncate();

        \DB::table('lead_products')->insert(array (
            0 =>
            array (
                'id' => 1,
                'lead_id' => 1,
                'product_id' => 1,
                'currency_id' => 1,
                'quantity' => 1,
                'price' => 200,
                'unit_id' => 3,
                'total' => 200,
                'created_at' => '2017-06-19 09:45:32',
                'updated_at' => '2017-06-19 09:45:32',
            ),
            1 =>
            array (
                'id' => 2,
                'lead_id' => 2,
                'product_id' => 2,
                'currency_id' => 2,
                'quantity' => 2,
                'price' => 2020,
                'unit_id' => 3,
                'total' => 2100,
                'created_at' => '2017-06-19 09:47:49',
                'updated_at' => '2017-06-19 09:47:49',
            ),
            2 =>
            array (
                'id' => 3,
                'lead_id' => 3,
                'product_id' => 3,
                'currency_id' => 3,
                'quantity' => 3,
                'price' => 3030,
                'unit_id' => 3,
                'total' => 3100,
                'created_at' => '2017-06-19 09:47:49',
                'updated_at' => '2017-06-19 09:47:49',
            ),
        ));


    }
}
