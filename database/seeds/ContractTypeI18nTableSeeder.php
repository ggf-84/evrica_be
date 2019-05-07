<?php

use Illuminate\Database\Seeder;

class ContractTypeI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contract_types_i18n')->truncate();

        \DB::table('contract_types_i18n')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'title' => 'Cost (CR)',
                        'description' => NULL,
                        'type_id' => 1,
                        'language_id' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                1 =>
                    array(
                        'id' => 2,
                        'title' => 'Cost-sharing (CS)',
                        'description' => NULL,
                        'type_id' => 2,
                        'language_id' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                2 =>
                    array(
                        'id' => 3,
                        'title' => 'Cost-plus-fixed-fee (CPFF)',
                        'description' => NULL,
                        'type_id' => 3,
                        'language_id' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),

                3 =>
                    array(
                        'id' => 4,
                        'title' => 'Cost (CR)',
                        'description' => NULL,
                        'type_id' => 3,
                        'language_id' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                4 =>
                    array(
                        'id' => 5,
                        'title' => 'Cost-sharing (CS)',
                        'description' => NULL,
                        'type_id' => 4,
                        'language_id' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                5 =>
                    array(
                        'id' => 6,
                        'title' => 'Cost-plus-fixed-fee (CPFF)',
                        'description' => NULL,
                        'type_id' => 5,
                        'language_id' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),

                6 =>
                    array(
                        'id' => 7,
                        'title' => 'Cost (CR)',
                        'description' => NULL,
                        'type_id' => 6,
                        'language_id' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                7 =>
                    array(
                        'id' => 8,
                        'title' => 'Cost-sharing (CS)',
                        'description' => NULL,
                        'type_id' => 7,
                        'language_id' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
                8 =>
                    array(
                        'id' => 9,
                        'title' => 'Cost-plus-fixed-fee (CPFF)',
                        'description' => NULL,
                        'type_id' => 8,
                        'language_id' => 1,
                        'created_at' => '2017-11-15 10:05:36',
                        'updated_at' => '2017-11-15 15:30:05',
                    ),
            ));
    }
}
