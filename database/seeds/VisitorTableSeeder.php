<?php

use Illuminate\Database\Seeder;

class VisitorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('visitor')->truncate();
        
        \DB::table('visitor')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ip' => 21726,
                'domain' => 'http://front.dev',
                'first_page' => 'http://front.dev/#!/',
                'visits' => 3,
                'country' => 'Republic of Moldova',
                'city' => 'Chisinau',
                'region' => 'Chișinău Municipality',
                'language' => 'ru',
                'browser' => 'Chrome',
                'browser_version' => '58.0.3029.110',
                'os' => 'Windows',
                'os_version' => '10',
                'mobile' => 0,
                'fingerprint' => '1768661656',
                'cookie_enabled' => 1,
                'created_at' => '2017-06-16 10:16:40',
                'updated_at' => '2017-07-04 09:43:22',
            ),
        ));
        
        
    }
}