<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('events')->truncate();

        \DB::table('events')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'event' => 'testEventA',
                ),
            1 =>
                array(
                    'id' => 2,
                    'event' => 'testEventC',
                ),
            2 =>
                array(
                    'id' => 3,
                    'event' => 'testEventC',
                )
        ));
    }
}
