<?php

use Illuminate\Database\Seeder;

class NotificationsTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('notification_types')->truncate();

        \DB::table('notification_types')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'entity' => 'counterparty',
                ),
            1 =>
                array(
                    'id' => 2,
                    'entity' => 'quote',
                ),
            2 =>
                array(
                    'id' => 3,
                    'entity' => 'department',
                ),
            5 =>
                array(
                    'id' => 6,
                    'entity' => 'rate',
                ),
            6 =>
                array(
                    'id' => 7,
                    'entity' => 'region',
                ),
            7 =>
                array(
                    'id' => 8,
                    'entity' => 'lead',
                ),
            8 =>
                array(
                    'id' => 9,
                    'entity' => 'country',
                ),
            9 =>
                array(
                    'id' => 10,
                    'entity' => 'users',
                )
        ));
    }
}
