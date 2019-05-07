<?php

use Illuminate\Database\Seeder;

class ChatInvitationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('chat_invitations')->truncate();

        \DB::table('chat_invitations')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'room_id' => 1,
                    'guest_id' => 1,
                    'user_id' => NULL,
                    'is_accepted' => 0,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-17 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'room_id' => 1,
                    'guest_id' => NULL,
                    'user_id' => 3,
                    'is_accepted' => 1,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'room_id' => 2,
                    'guest_id' => NULL,
                    'user_id' => 2,
                    'is_accepted' => 1,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            3 =>
                array(
                    'id' => 4,
                    'room_id' => 3,
                    'guest_id' => 2,
                    'user_id' => NULL,
                    'is_accepted' => 1,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
        ));


    }
}