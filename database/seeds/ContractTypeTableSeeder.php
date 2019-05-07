<?php

use Illuminate\Database\Seeder;

class ContractTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('contract_types')->truncate();

        \DB::table('contract_types')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'company_id' => 1,
                    ),
                1 =>
                    array(
                        'id' => 2,
                        'company_id' => 1,
                    ),
                2 =>
                    array(
                        'id' => 3,
                        'company_id' => 1,
                    ),
                3 =>
                    array(
                        'id' => 4,
                        'company_id' => 2
                    ),
                4 =>
                    array(
                        'id' => 5,
                        'company_id' => 2
                    ),
                5 =>
                    array(
                        'id' => 6,
                        'company_id' => 2
                    ),
                6 =>
                    array(
                        'id' => 7,
                        'company_id' => 3
                    ),
                7 =>
                    array(
                        'id' => 8,
                        'company_id' => 3
                    ),
                8 =>
                    array(
                        'id' => 9,
                        'company_id' => 3
                    ),

            ));
    }
}
