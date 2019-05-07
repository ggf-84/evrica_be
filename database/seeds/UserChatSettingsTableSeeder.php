<?php

use Illuminate\Database\Seeder;

class UserChatSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('user_chat_settings')->delete();

        \DB::table('user_chat_settings')->insert(array (
            0 =>
            array (
                'id' => 1,
                'setting_id' => 1,
                'user_id' => 3,
                'value' => '7mP60fxvfyHLSEd1GN1asKAzUeLuaMxaOVeLtBIh.mpga',
                'created_at' => '2018-03-21 00:00:00',
                'updated_at' => '2018-03-22 15:18:06',
            ),
            1 =>
            array (
                'id' => 2,
                'setting_id' => 1,
                'user_id' => 4,
                'value' => '7mP60fxvfyHLSEd1GN1asKAzUeLuaMxaOVeLtBIh.mpga',
                'created_at' => '2018-03-22 12:15:06',
                'updated_at' => '2018-03-22 15:17:27',
            ),
            2 =>
            array (
                'id' => 3,
                'setting_id' => 2,
                'user_id' => 4,
                'value' => '7mP60fxvfyHLSEd1GN1asKAzUeLuaMxaOVeLtBIh.mpga',
                'created_at' => '2018-03-22 12:15:26',
                'updated_at' => '2018-03-22 12:16:07',
            ),
            3 =>
            array (
                'id' => 4,
                'setting_id' => 2,
                'user_id' => 3,
                'value' => 'PyPosQPH5AaNiPX7vSkvjIF3mzFXbKK5yUkWUFMY.mpga',
                'created_at' => '2018-03-22 12:17:56',
                'updated_at' => '2018-03-22 15:24:15',
            ),
        ));


    }
}
