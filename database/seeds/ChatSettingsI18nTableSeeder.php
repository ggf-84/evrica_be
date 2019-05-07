<?php

use Illuminate\Database\Seeder;

class ChatSettingsI18nTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_settings_i18n')->delete();
        
        \DB::table('chat_settings_i18n')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Typing sound',
                'description' => 'user is typing sound',
                'setting_id' => 1,
                'language_id' => 1,
                'created_at' => '2018-03-21 00:00:00',
                'updated_at' => '2018-03-21 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Notification sound',
                'description' => 'new notification sound',
                'setting_id' => 2,
                'language_id' => 1,
                'created_at' => '2018-03-21 00:00:00',
                'updated_at' => '2018-03-21 00:00:00',
            ),
        ));
        
        
    }
}