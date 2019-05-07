<?php

use Illuminate\Database\Seeder;

class ChatSettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('chat_settings')->delete();
        
        \DB::table('chat_settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'user_typing_sound',
                'group_id' => 1,
                'created_at' => '2018-03-21 00:00:00',
                'updated_at' => '2018-03-21 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'notification_sound',
                'group_id' => 1,
                'created_at' => '2018-03-21 00:00:00',
                'updated_at' => '2018-03-21 00:00:00',
            ),
        ));
        
        
    }
}