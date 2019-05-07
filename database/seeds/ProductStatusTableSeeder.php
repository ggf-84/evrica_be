<?php

use Illuminate\Database\Seeder;

class ProductStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('product_status')->truncate();

        \DB::table('product_status')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'company_id' => 3,
                ),
            1 =>
                array(
                    'id' => 2,
                    'company_id' => 3,
                ),
            2 =>
                array(
                    'id' => 3,
                    'company_id' => 2,
                ),
        ));
    }
}
