<?php

use Illuminate\Database\Seeder;

class UnitContentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('unit_i18n')->truncate();

        \DB::table('unit_i18n')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'unit_id' => 1,
                    'title' => "Main Store",
                    'description' => "Description for Main Store",
                    'language_id' => 1
                ),
            1 =>
                array(
                    'id' => 2,
                    'unit_id' => 1,
                    'title' => "Магазин",
                    'description' => "Описание Магазина",
                    'language_id' => 2
                ),
            2 =>
                array(
                    'id' => 3,
                    'unit_id' => 1,
                    'title' => "Magazin",
                    'description' => "Descrierea Magazinului",
                    'language_id' => 3
                ),
            3 =>
                array(
                    'id' => 4,
                    'unit_id' => 2,
                    'title' => "Storage",
                    'description' => "Description for Storage",
                    'language_id' => 1
                ),
            4 =>
                array(
                    'id' => 5,
                    'unit_id' => 2,
                    'title' => "Склад",
                    'description' => "Описание Склада",
                    'language_id' => 2
                ),
            5 =>
                array(
                    'id' => 6,
                    'unit_id' => 2,
                    'title' => "Depozit",
                    'description' => "Descrierea Depozitului",
                    'language_id' => 3
                ),
            6 =>
                array(
                    'id' => 7,
                    'unit_id' => 3,
                    'title' => "Office",
                    'description' => "Description for Office",
                    'language_id' => 1
                ),
            7 =>
                array(
                    'id' => 8,
                    'unit_id' => 3,
                    'title' => "Офис",
                    'description' => "Описание Офиса",
                    'language_id' => 2
                ),
            8 =>
                array(
                    'id' => 9,
                    'unit_id' => 3,
                    'title' => "Oficiu",
                    'description' => "Descrierea Oficiului",
                    'language_id' => 3
                )
            ));
    }
}
