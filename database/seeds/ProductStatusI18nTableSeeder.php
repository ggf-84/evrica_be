<?php

use Illuminate\Database\Seeder;

class ProductStatusI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('product_status_i18n')->truncate();

        \DB::table('product_status_i18n')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'Defective',
                    'description' => NULL,
                    'status_id' => 1,
                    'language_id' => 1,
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Cancelled',
                    'description' => NULL,
                    'status_id' => 2,
                    'language_id' => 1,
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'In Service',
                    'description' => NULL,
                    'status_id' => 3,
                    'language_id' => 1,
                ),
        ));
    }
}
