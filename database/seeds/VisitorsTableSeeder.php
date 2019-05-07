<?php

use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('visitors')->truncate();

        \DB::table('visitors')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'ip_address' => '217.26.171.138',
                    'language_id' => 1,
                    'country_id' => 139,
                    'state_id' => 1640,
                    'user_id' => 3,
                    'device' => 'Windows 10',
                    'browser' => 'Chrome',
                    'referer' => NULL,
                    'is_mobile' => 0,
                    'page_views' => 1,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'ip_address' => '215.214.36.234',
                    'language_id' => 2,
                    'country_id' => 1,
                    'state_id' => 1,
                    'user_id' => 2,
                    'device' => 'Windows 7',
                    'browser' => 'Safari',
                    'referer' => NULL,
                    'is_mobile' => 0,
                    'page_views' => 50,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'ip_address' => '82.232.60.226',
                    'language_id' => 3,
                    'country_id' => 1,
                    'state_id' => 3,
                    'user_id' => 1,
                    'device' => 'Windows XP',
                    'browser' => 'Internet Explorer',
                    'referer' => NULL,
                    'is_mobile' => 0,
                    'page_views' => 510,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
        ));


    }
}