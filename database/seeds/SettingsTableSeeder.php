<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->truncate();

        \DB::table('settings')->insert(array(
            0 =>
                array(
                    'code' => 'language',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            1 =>
                array(
                    'code' => 'menu_height',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            2 =>
                array(
                    'code' => 'notifications',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            3 =>
                array(
                    'code' => 'menu_width',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            4 =>
                array(
                    'code' => 'text_color',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            5 =>
                array(
                    'code' => 'insert_user_type',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            6 =>
                array(
                    'code' => 'social_login',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            7 =>
                array(
                    'code' => 'facebook_client_id',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            8 =>
                array(
                    'code' => 'facebook_secret_key',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            9 =>
                array(
                    'code' => 'google_client_id',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            10 =>
                array(
                    'code' => 'google_secret_key',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            11 =>
                array(
                    'code' => 'twitter_client_id',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            12 =>
                array(
                    'code' => 'twitter_secret_key',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            13 =>
                array(
                    'code' => 'chat_sound',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            14 =>
                array(
                    'code' => 'chat_sound_notification',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            15 =>
                array(
                    'code' => 'chat_sound_send_message',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                ),
            16 =>
                array(
                    'code' => 'chat_sound_typing_message',
                    'is_system' => 0,
                    'created_at' => '2017-06-19 09:45:32',
                    'updated_at' => '2017-06-19 09:45:32',
                )
        ));

    }
}
