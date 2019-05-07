<?php

use Illuminate\Database\Seeder;

class ChatSettingsGroupTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_settings_group')->delete();
        
        \DB::table('chat_settings_group')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'chat_sound',
                'created_at' => '2018-03-21 00:00:00',
                'updated_at' => '2018-03-21 00:00:00',
            ),
        ));
        
        
    }
}