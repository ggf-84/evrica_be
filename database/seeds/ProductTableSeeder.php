<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product')->truncate();

        \DB::table('product')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    //'title' => 'Product 1',
                    //'description' => 'Product 1',
                    // 'currency_id' => 1,
                    'price' => 200,
                    'tax_rate' => 1,
                    'tax_included' => 1,
                    'unit_id' => 3,
                    'category_id' => 2,
                    'preview_image' => null,
                    'full_image' => null,
                    // 'order' => 1,
                    'status_id' => 1,
                    'company_id' => 3,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            1 =>
                array(
                    'id' => 2,
                    //'title' => 'Product 1',
                    //'description' => 'Product 1',
                    // 'currency_id' => 1,
                    'price' => 200,
                    'tax_rate' => 1,
                    'tax_included' => 1,
                    'unit_id' => 3,
                    'category_id' => 4,
                    'preview_image' => null,
                    'full_image' => null,
                    // 'order' => 1,
                    'status_id' => 1,
                    'company_id' => 2,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            2 =>
                array(
                    'id' => 3,
                    //'title' => 'Product 1',
                    // 'description' => 'Product 1',
                    // 'currency_id' => 1,
                    'price' => 200,
                    'tax_rate' => 1,
                    'tax_included' => 1,
                    'unit_id' => 3,
                    'category_id' => 6,
                    'preview_image' => null,
                    'full_image' => null,
                    // 'order' => 1,
                    'status_id' => 1,
                    'company_id' => 1,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            3 =>
                array(
                    'id' => 4,
                    //'title' => 'Product 1',
                    // 'description' => 'Product 1',
                    // 'currency_id' => 2,
                    'price' => 960,
                    'tax_rate' => 2,
                    'tax_included' => 2,
                    'unit_id' => 3,
                    'category_id' => 6,
                    'preview_image' => null,
                    'full_image' => null,
                    // 'order' => 1,
                    'status_id' => 1,
                    'company_id' => 4,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            4 =>
                array(
                    'id' => 5,
                    //'title' => 'Product 1',
                    // 'description' => 'Product 1',
                    // 'currency_id' => 2,
                    'price' => 255,
                    'tax_rate' => 2,
                    'tax_included' => 2,
                    'unit_id' => 3,
                    'category_id' => 6,
                    'preview_image' => null,
                    'full_image' => null,
                    // 'order' => 1,
                    'status_id' => 1,
                    'company_id' => 5,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
            5 =>
                array(
                    'id' => 6,
                    //'title' => 'Product 1',
                    // 'description' => 'Product 1',
                    // 'currency_id' => 2,
                    'price' => 3588,
                    'tax_rate' => 1,
                    'tax_included' => 2,
                    'unit_id' => 3,
                    'category_id' => 6,
                    'preview_image' => null,
                    'full_image' => null,
                    // 'order' => 1,
                    'status_id' => 1,
                    'company_id' => 3,
                    'created_at' => '2017-06-16 13:16:33',
                    'updated_at' => '2017-06-16 13:16:33',
                ),
        ));


    }
}
