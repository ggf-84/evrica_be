<?php

use Illuminate\Database\Seeder;

class ChatRoomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('chat_rooms')->truncate();

        for($i=1; $i<=20; $i++){
            $data[] = factory(App\Models\ChatRoom::class)->create(['id' => $i]);
        }
    }
}
