<?php

use Illuminate\Database\Seeder;

class UnitTypeContentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('unit_type_i18n')->truncate();

        \DB::table('unit_type_i18n')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'type_id' => 1,
                    'title' => "Store",
                    'language_id' => 1
                ),
            1 =>
                array(
                    'id' => 2,
                    'type_id' => 1,
                    'title' => "Магазин",
                    'language_id' => 2
                ),
            2 =>
                array(
                    'id' => 3,
                    'type_id' => 1,
                    'title' => "Magazin",
                    'language_id' => 3
                ),
            3 =>
                array(
                    'id' => 4,
                    'type_id' => 2,
                    'title' => "Storage",
                    'language_id' => 1
                ),
            4 =>
                array(
                    'id' => 5,
                    'type_id' => 2,
                    'title' => "Склад",
                    'language_id' => 2
                ),
            5 =>
                array(
                    'id' => 6,
                    'type_id' => 2,
                    'title' => "Depozit",
                    'language_id' => 3
                ),
            6 =>
                array(
                    'id' => 7,
                    'type_id' => 3,
                    'title' => "Office",
                    'language_id' => 1
                ),
            7 =>
                array(
                    'id' => 8,
                    'type_id' => 3,
                    'title' => "Офис",
                    'language_id' => 2
                ),
            8 =>
                array(
                    'id' => 9,
                    'type_id' => 3,
                    'title' => "Oficiu",
                    'language_id' => 3
                )
            ));
    }
}
