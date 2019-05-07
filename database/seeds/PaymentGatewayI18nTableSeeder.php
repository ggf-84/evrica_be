<?php

use Illuminate\Database\Seeder;

class PaymentGatewayI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('payment_gateways_i18n')->truncate();

        \DB::table('payment_gateways_i18n')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'MasterCard',
                'description' => NULL,
                'gateway_id' => 1,
                'language_id' => 1,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'Stripe',
                'description' => NULL,
                'gateway_id' => 2,
                'language_id' => 1,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'Western Union',
                'description' => NULL,
                'gateway_id' => 3,
                'language_id' => 1,
                'created_at' => '2017-06-19 08:10:24',
                'updated_at' => '2017-06-19 08:10:24',
            ),
        ));
    }
}
