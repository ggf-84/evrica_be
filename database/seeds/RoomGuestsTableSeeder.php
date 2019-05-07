<?php

use Illuminate\Database\Seeder;

class RoomGuestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('room_guests')->truncate();

        \DB::table('room_guests')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'guest_id' => 1,
                    'room_id' => 1,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'guest_id' => 2,
                    'room_id' => 1,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'guest_id' => 3,
                    'room_id' => 1,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            3 =>
                array(
                    'id' => 4,
                    'guest_id' => 3,
                    'room_id' => 2,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
        ));


    }
}