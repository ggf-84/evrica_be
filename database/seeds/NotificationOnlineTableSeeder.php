<?php

use Illuminate\Database\Seeder;

class NotificationOnlineTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('notification_online')->truncate();
        
        \DB::table('notification_online')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'online' => '2017-06-16 10:21:28',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'online' => '2017-06-16 11:27:31',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'online' => '2017-06-22 12:03:14',
            ),
        ));
        
        
    }
}