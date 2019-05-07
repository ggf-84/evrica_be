<?php

use Illuminate\Database\Seeder;

class DomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('domains')->truncate();

        \DB::table('domains')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'evrica.io',
                    'master' => null,
                    'last_check' => null,
                    'type' => 'MASTER',
                    'notified_serial' => null,
                    'account' => null,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'evrica.de',
                    'master' => null,
                    'last_check' => null,
                    'type' => 'MASTER',
                    'notified_serial' => null,
                    'account' => null,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'evrica.it',
                    'master' => null,
                    'last_check' => null,
                    'type' => 'MASTER',
                    'notified_serial' => null,
                    'account' => null,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
        ));
    }
}
