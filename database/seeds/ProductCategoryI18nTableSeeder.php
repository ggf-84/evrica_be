<?php

use Illuminate\Database\Seeder;

class ProductCategoryI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('product_categories_i18n')->truncate();

        \DB::table('product_categories_i18n')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'IT & Mobile',
                    'description' => NULL,
                    'category_id' => 1,
                    'language_id' => 1,
                    // 'created_at' => '2017-06-16 00:00:00',
                    // 'updated_at' => '2017-06-17 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Fashion',
                    'description' => NULL,
                    'category_id' => 2,
                    'language_id' => 1,
                    // 'created_at' => NULL,
                    // 'updated_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'IT & Mobile',
                    'description' => NULL,
                    'category_id' => 3,
                    'language_id' => 1,
                    // 'created_at' => '2017-06-16 00:00:00',
                    // 'updated_at' => '2017-06-17 00:00:00',
                ),
            3 =>
                array(
                    'id' => 4,
                    'title' => 'Fashion',
                    'description' => NULL,
                    'category_id' => 1,
                    'language_id' => 1,
                    // 'created_at' => NULL,
                    // 'updated_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'title' => 'IT & Mobiles',
                    'description' => NULL,
                    'category_id' => 2,
                    'language_id' => 1,
                    // 'created_at' => '2017-06-16 00:00:00',
                    // 'updated_at' => '2017-06-17 00:00:00',
                ),
            5 =>
                array(
                    'id' => 6,
                    'title' => 'Fashion',
                    'description' => NULL,
                    'category_id' => 3,
                    'language_id' => 1,
                    // 'created_at' => NULL,
                    // 'updated_at' => NULL,
                ),
        ));
    }
}
