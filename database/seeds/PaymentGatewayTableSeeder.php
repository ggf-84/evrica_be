<?php

use Illuminate\Database\Seeder;

class PaymentGatewayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('payment_gateways')->truncate();

        \DB::table('payment_gateways')->insert(array(
            0 =>
            array(
                'id' => 1,
                'company_id' => 1,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
            1 =>
            array(
                'id' => 2,
                'company_id' => 3,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
            2 =>
            array(
                'id' => 3,
                'company_id' => 3,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
        ));
    }
}
