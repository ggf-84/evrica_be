<?php

use Illuminate\Database\Seeder;

class ShardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('shards')->truncate();

        \DB::table('shards')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'evrica.io',
                    'description' => 'Shard one',
                    'country' => 'United Arab Emirates',
                    'region' => 'Farah',
                    'data_center' => null,
                    'country_id' => 3,
                    'state_id' => 16,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'evrica.de',
                    'description' => 'Shard two',
                    'country' => 'Great Britain (UK)',
                    'region' => 'Harrow',
                    'data_center' => null,
                    'country_id' => 71,
                    'state_id' => 1237,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'evrica.it',
                    'description' => 'Shard three',
                    'country' => 'Spain',
                    'region' => 'Aragon',
                    'data_center' => null,
                    'country_id' => 62,
                    'state_id' => 954,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
        ));
    }
}
