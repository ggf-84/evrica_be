<?php

use Illuminate\Database\Seeder;

class ChatGuestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('chat_guests')->truncate();

        \DB::table('chat_guests')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => NULL,
                    'email' => NULL,
                    'socket' => NULL,
                    'question' => NULL,
                    'visitor_id' => 1,
                    'user_id' => NULL,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'Dorin',
                    'email' => 'dorin@evrica.io',
                    'socket' => NULL,
                    'question' => '?',
                    'visitor_id' => 1,
                    'user_id' => NULL,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'Ivan',
                    'email' => 'ivan@ivan.io',
                    'socket' => NULL,
                    'question' => 'Services?',
                    'visitor_id' => 2,
                    'user_id' => NULL,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            3 =>
                array(
                    'id' => 4,
                    'name' => 'John',
                    'email' => 'john@john.doe',
                    'socket' => NULL,
                    'question' => 'Products ?',
                    'visitor_id' => 3,
                    'user_id' => 3,
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
        ));


    }
}