<?php

use Illuminate\Database\Seeder;

class VisitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('visits')->truncate();

        \DB::table('visits')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'ip_address' => '72.66.14.185',
                    'domain_id' => 1,
                    'visitor_id' => 1,
                    'page_url' => 'https://dev.evrica.io/#/',
                    'page_views' => 12,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'ip_address' => '72.151.229.139',
                    'domain_id' => 1,
                    'visitor_id' => 2,
                    'page_url' => 'https://dev.evrica.io/#/page/maincrm',
                    'page_views' => 33,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'ip_address' => '188.123.201.220',
                    'domain_id' => 1,
                    'visitor_id' => 3,
                    'page_url' => 'https://dev.evrica.io/#/page/listcountries',
                    'page_views' => 3,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
        ));


    }
}