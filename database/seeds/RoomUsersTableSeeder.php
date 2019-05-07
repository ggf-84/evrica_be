<?php

use Illuminate\Database\Seeder;

class RoomUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('room_users')->truncate();
        
        \DB::table('room_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'room_id' => 1,
                'created_at' => '2018-02-16 00:00:00',
                'updated_at' => '2018-02-16 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'room_id' => 3,
                'created_at' => '2018-02-16 00:00:00',
                'updated_at' => '2018-02-16 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'room_id' => 3,
                'created_at' => '2018-02-16 00:00:00',
                'updated_at' => '2018-02-16 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'room_id' => 3,
                'created_at' => '2018-02-16 00:00:00',
                'updated_at' => '2018-02-16 00:00:00',
            ),
        ));
        
        
    }
}