<?php

use Illuminate\Database\Seeder;

class LeadStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


      \DB::table('lead_status')->truncate();

      \DB::table('lead_status')->insert(array(
          0 =>
          array(
              'id' => 1,
              'company_id' => 1,
              'created_at' => '2017-06-19 08:10:24',
              'updated_at' => '2017-06-19 08:10:24',
          ),
          1 =>
          array(
              'id' => 2,
              'company_id' => 2,
              'created_at' => '2017-06-19 08:10:24',
              'updated_at' => '2017-06-19 08:10:24',
          ),
          2 =>
          array(
              'id' => 3,
              'company_id' => 3,
              'created_at' => '2017-06-19 08:10:24',
              'updated_at' => '2017-06-19 08:10:24',
          ),
          3 =>
          array(
              'id' => 4,
              'company_id' => 4,
              'created_at' => '2017-06-19 08:10:24',
              'updated_at' => '2017-06-19 08:10:24',
          ),
      ));


    }
}
