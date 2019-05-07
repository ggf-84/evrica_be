<?php

use Illuminate\Database\Seeder;

class ExtraAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('extra_accounts')->truncate();

        \DB::table('extra_accounts')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'provider_id' => 'yRQYnWzskCZUxPwaQupWkiUzKELZ49eM7oWxAQK_ZXw',
                    'user_id' => 3,
                    'provider_type' => 'GitHub',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'provider_id' => 'yRQYnWzskCZUxPwaQupWkiUzKELZ49eM7oWxAQK_ZXw',
                    'user_id' => 3,
                    'provider_type' => 'Facebook',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'provider_id' => 'yRQYnWzskCZUxPwaQupWkiUzKELZ49eM7oWxAQK_ZXw',
                    'user_id' => 4,
                    'provider_type' => 'Google',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            3 =>
                array(
                    'id' => 4,
                    'provider_id' => 'yRQYnWzskCZUxPwaQupWkiUzKELZ49eM7oWxAQK_ZXw',
                    'user_id' => 5,
                    'provider_type' => 'OAuth',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
        ));
    }
}
