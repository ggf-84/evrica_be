<?php

use Illuminate\Database\Seeder;

class NotificationsMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('notification_message')->truncate();

        \DB::table('notification_message')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'type_id' => 1,
                    'event' => 'update',
                ),
            1 =>
                array(
                    'id' => 2,
                    'type_id' => 1,
                    'event' => 'delete',
                ),
            2 =>
                array(
                    'id' => 3,
                    'type_id' => 1,
                    'event' => 'create',
                ),
            3 =>
                array(
                    'id' => 4,
                    'type_id' => 2,
                    'event' => 'update',
                ),
            4 =>
                array(
                    'id' => 5,
                    'type_id' => 2,
                    'event' => 'delete',
                ),
            5 =>
                array(
                    'id' => 6,
                    'type_id' => 2,
                    'event' => 'create',
                ),
            6 =>
                array(
                    'id' => 7,
                    'type_id' => 1,
                    'event' => 'counterpartActivate',
                ),
            7 =>
                array(
                    'id' => 8,
                    'type_id' => 10,
                    'event' => 'newUser',
                ),
            8 =>
                array(
                    'id' => 10,
                    'type_id' => 2,
                    'event' => 'renameQuote',
                ),

        ));
    }
}
