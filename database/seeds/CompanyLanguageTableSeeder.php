<?php

use Illuminate\Database\Seeder;

class CompanyLanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('company_language')->truncate();

        \DB::table('company_language')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'company_id' => 1,
                        'language_id' => 1,
                    ),
                1 =>
                    array(
                        'id' => 2,
                        'company_id' => 1,
                        'language_id' => 3,
                    ),
                2 =>
                    array(
                        'id' => 3,
                        'company_id' => 2,
                        'language_id' => 3,
                    ),
                3 =>
                    array(
                        'id' => 4,
                        'company_id' => 2,
                        'language_id' => 1,
                    ),
                4 =>
                    array(
                        'id' => 5,
                        'company_id' => 3,
                        'language_id' => 1,
                    ),
                6 =>
                    array(
                        'id' => 7,
                        'company_id' => 3,
                        'language_id' => 3,
                    ),
                7 =>
                    array(
                        'id' => 8,
                        'company_id' => 3,
                        'language_id' => 2,
                    ),
                8 =>
                    array(
                        'id' => 9,
                        'company_id' => 4,
                        'language_id' => 1,
                    ),
                9 =>
                    array(
                        'id' => 10,
                        'company_id' => 5,
                        'language_id' => 1,
                    ),
            ));
    }
}
