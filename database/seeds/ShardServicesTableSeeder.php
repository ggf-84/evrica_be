<?php

use Illuminate\Database\Seeder;

class ShardServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('shards_services')->truncate();

        \DB::table('shards_services')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'evrica.io',
                    'description' => 'Service one',
                    'shard_id' => 1,
                    'service_type' => 'mysql',
                    'service_ip' => null,
                    'service_database' => null,
                    'service_username' => null,
                    'service_password' => null,
                    'service_port' => null,
                    'service_url' => null,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'evrica.de',
                    'description' => 'Service two',
                    'shard_id' => 2,
                    'service_type' => 'rabbit',
                    'service_ip' => null,
                    'service_database' => null,
                    'service_username' => null,
                    'service_password' => null,
                    'service_port' => null,
                    'service_url' => null,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'evrica.it',
                    'description' => 'Service three',
                    'shard_id' => 3,
                    'service_type' => 'redis',
                    'service_ip' => null,
                    'service_database' => null,
                    'service_username' => null,
                    'service_password' => null,
                    'service_port' => null,
                    'service_url' => null,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
        ));
    }
}
