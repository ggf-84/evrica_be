<?php

use Illuminate\Database\Seeder;

class ChatSettingsGroupI18nTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_settings_group_i18n')->delete();
        
        \DB::table('chat_settings_group_i18n')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Sound',
                'description' => 'sound group',
                'group_id' => 1,
                'language_id' => 1,
                'created_at' => '2018-03-21 00:00:00',
                'updated_at' => '2018-03-21 00:00:00',
            ),
        ));
        
        
    }
}