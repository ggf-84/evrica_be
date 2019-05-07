<?php

use Illuminate\Database\Seeder;

class DomainRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('domain_records')->truncate();

        \DB::table('domain_records')->insert(array(
            0 =>
                array(
                    'domain_id' => 1,
                    'name' => 'dev.evrica.io',
                    'type' => 'A',
                    'content' => '185.92.72.47',
                    'ttl' => 3600,
                    'prio' => 0,
                    'company_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            1 =>
                array(
                    'domain_id' => 2,
                    'name' => 'master.evrica.de',
                    'type' => 'A',
                    'content' => '185.92.72.47',
                    'ttl' => 3600,
                    'prio' => 0,
                    'company_id' => 2,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            3 =>
                array(
                    'domain_id' => 3,
                    'name' => 'aux.evrica.it',
                    'type' => 'A',
                    'content' => '185.92.72.47',
                    'ttl' => 3600,
                    'prio' => 0,
                    'company_id' => 1,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            4 =>
                array(
                    'domain_id' => 1,
                    'name' => 'evrica-lab-srl.evrica.io',
                    'type' => 'A',
                    'content' => '185.92.72.47',
                    'ttl' => 3600,
                    'prio' => 0,
                    'company_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            5 =>
                array(
                    'domain_id' => 1,
                    'name' => 'localhost',
                    'type' => 'A',
                    'content' => '185.92.72.47',
                    'ttl' => 3600,
                    'prio' => 0,
                    'company_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            6 =>
                array(
                    'domain_id' => 1,
                    'name' => 'evrica.local',
                    'type' => 'A',
                    'content' => '185.92.72.47',
                    'ttl' => 3600,
                    'prio' => 0,
                    'company_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
        ));
    }
}
