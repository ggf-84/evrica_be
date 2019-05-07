<?php

use Illuminate\Database\Seeder;

class UserCardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('user_cards')->truncate();

        \DB::table('user_cards')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'MasterCard',
                    'expiry' => NULL,
                    'type_id' => 1,
                    'user_id' => 1,
                    'currency_id' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'SunTrust Prepaid MasterCard',
                    'expiry' => NULL,
                    'type_id' => 2,
                    'user_id' => 2,
                    'currency_id' => 2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'TD Go Card',
                    'expiry' => NULL,
                    'type_id' => 3,
                    'user_id' => 3,
                    'currency_id' => 3,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));
    }
}
