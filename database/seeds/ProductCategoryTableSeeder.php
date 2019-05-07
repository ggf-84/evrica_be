<?php

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('product_categories')->truncate();

        \DB::table('product_categories')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    // 'title' => 'IT & Mobile',
                    'company_id' => 3,
                    'parent_id' => 0,
                    'tax_rate' => 22.00,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-17 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    // 'title' => 'Fashion',
                    'company_id' => 3,
                    'parent_id' => 0,
                    'tax_rate' => 22.00,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    // 'title' => 'IT & Mobile',
                    'company_id' => 2,
                    'parent_id' => 0,
                    'tax_rate' => 22.00,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-17 00:00:00',
                ),
            3 =>
                array(
                    'id' => 4,
                    // 'title' => 'Fashion',
                    'company_id' => 2,
                    'parent_id' => 0,
                    'tax_rate' => 22.00,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    // 'title' => 'IT & Mobile',
                    'company_id' => 5,
                    'parent_id' => 0,
                    'tax_rate' => 22.00,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-17 00:00:00',
                ),
            5 =>
                array(
                    'id' => 6,
                    // 'title' => 'Fashion',
                    'company_id' => 3,
                    'parent_id' => 0,
                    'tax_rate' => 22.00,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));
    }
}
