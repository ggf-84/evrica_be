<?php

use Illuminate\Database\Seeder;

class ChatSoundsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_sounds')->delete();
        
        \DB::table('chat_sounds')->insert(array (
            0 => 
            array (
                'id' => 1,
                'url' => '3/sound/3pygxBXeSJ0GsC1Io9cbLOKY8beZfVhGO5ljwns7.mpga',
                'name' => '3/sound/3pygxBXeSJ0GsC1Io9cbLOKY8beZfVhGO5ljwns7.mpga',
                'extension' => 'mp3',
                'original_name' => 'Cool Notification 20.mp3',
                'size' => '21.3KB',
                'user_id' => 4,
                'company_id' => 1,
                'created_at' => '2018-03-21 13:48:03',
                'updated_at' => '2018-03-21 13:48:03',
            ),
            1 => 
            array (
                'id' => 2,
                'url' => '3/sound/wGZ1BdzEv93N8QXUnRSToYUm9wfccCZrAyXs5E2d.mpga',
                'name' => 'wGZ1BdzEv93N8QXUnRSToYUm9wfccCZrAyXs5E2d.mpga',
                'extension' => 'mp3',
                'original_name' => 'Cool Notification 20.mp3',
                'size' => '21.3KB',
                'user_id' => 4,
                'company_id' => 3,
                'created_at' => '2018-03-21 13:52:53',
                'updated_at' => '2018-03-21 13:52:53',
            ),
            2 => 
            array (
                'id' => 3,
                'url' => '3/sound/jvFZLh6wEo0REXhntcXKcZzSkc6qI7ySQokMY9MF.mpga',
                'name' => 'jvFZLh6wEo0REXhntcXKcZzSkc6qI7ySQokMY9MF.mpga',
                'extension' => 'mp3',
                'original_name' => 'Cool Notification 20.mp3',
                'size' => '21.3KB',
                'user_id' => 4,
                'company_id' => 3,
                'created_at' => '2018-03-21 13:53:22',
                'updated_at' => '2018-03-21 13:53:22',
            ),
            3 => 
            array (
                'id' => 4,
                'url' => '3/sound/Gl0kjZsTJh3opSXL6wPUEAUoCK6ButRb5QChP1ku.mpga',
                'name' => 'Gl0kjZsTJh3opSXL6wPUEAUoCK6ButRb5QChP1ku.mpga',
                'extension' => 'mp3',
                'original_name' => 'Cool Notification 20.mp3',
                'size' => '21.3KB',
                'user_id' => 4,
                'company_id' => 3,
                'created_at' => '2018-03-21 13:53:36',
                'updated_at' => '2018-03-21 13:53:36',
            ),
            4 => 
            array (
                'id' => 5,
                'url' => '3/sound/nESALJoCEKexbHpy9uM77q1ve6eydrnJ9xCf8o14.mpga',
                'name' => 'nESALJoCEKexbHpy9uM77q1ve6eydrnJ9xCf8o14.mpga',
                'extension' => 'mp3',
                'original_name' => 'Cool Notification 20.mp3',
                'size' => '21.3KB',
                'user_id' => 4,
                'company_id' => 3,
                'created_at' => '2018-03-21 13:53:56',
                'updated_at' => '2018-03-21 13:53:56',
            ),
            5 => 
            array (
                'id' => 6,
                'url' => '3/sound/MrXtA3NuNA59dfnOpoRJgKhxpRC2uwy1F63piZVZ.mpga',
                'name' => 'MrXtA3NuNA59dfnOpoRJgKhxpRC2uwy1F63piZVZ.mpga',
                'extension' => 'mp3',
                'original_name' => 'Unique Notification0.mp3',
                'size' => '28.2KB',
                'user_id' => 4,
                'company_id' => 3,
                'created_at' => '2018-03-21 13:59:22',
                'updated_at' => '2018-03-21 13:59:22',
            ),
            6 => 
            array (
                'id' => 7,
                'url' => '3/sound/7mP60fxvfyHLSEd1GN1asKAzUeLuaMxaOVeLtBIh.mpga',
                'name' => '7mP60fxvfyHLSEd1GN1asKAzUeLuaMxaOVeLtBIh.mpga',
                'extension' => 'mp3',
                'original_name' => 'Maramba0.mp3',
                'size' => '30KB',
                'user_id' => 4,
                'company_id' => 3,
                'created_at' => '2018-03-21 14:01:27',
                'updated_at' => '2018-03-21 14:01:27',
            ),
            7 => 
            array (
                'id' => 8,
                'url' => '3/sound/PyPosQPH5AaNiPX7vSkvjIF3mzFXbKK5yUkWUFMY.mpga',
                'name' => 'PyPosQPH5AaNiPX7vSkvjIF3mzFXbKK5yUkWUFMY.mpga',
                'extension' => 'mp3',
                'original_name' => 'facebook_message.mp3',
                'size' => '45.8KB',
                'user_id' => 3,
                'company_id' => 3,
                'created_at' => '2018-03-22 15:24:09',
                'updated_at' => '2018-03-22 15:24:09',
            ),
        ));
        
        
    }
}