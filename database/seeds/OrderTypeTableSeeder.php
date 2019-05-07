<?php

use Illuminate\Database\Seeder;

class OrderTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('order_types')->truncate();

        \DB::table('order_types')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    // 'title' => 'Sell products',
                    'company_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-17 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    // 'title' => 'Sell services',
                    'company_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-17 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    // 'title' => 'Sell exclusive services',
                    'company_id' => 5,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-17 00:00:00',
                ),
            3 =>
                array(
                    'id' => 4,
                    // 'title' => 'Sell exclusive products',
                    'company_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-17 00:00:00',
                ),
            4 =>
                array(
                    'id' => 5,
                    // 'title' => 'Sell limited products',
                    'company_id' => 4,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-17 00:00:00',
                ),
            5 =>
                array(
                    'id' => 6,
                    // 'title' => 'Sell limited services',
                    'company_id' => 2,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-17 00:00:00',
                ),
        ));


    }
}
