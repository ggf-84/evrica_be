<?php

use Illuminate\Database\Seeder;

class QuoteStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('quote_status')->truncate();

        \DB::table('quote_status')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'company_id' => 3,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'company_id' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'company_id' => 2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));
    }
}
