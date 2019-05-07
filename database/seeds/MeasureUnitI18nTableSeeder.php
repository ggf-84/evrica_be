<?php

use Illuminate\Database\Seeder;

class MeasureUnitI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('measure_unit_i18n')->truncate();

        \DB::table('measure_unit_i18n')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'microgram',
                    'description' => '',
                    'sign' => 'μg',
                    'unit_id' => 1,
                    'language_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'milligram',
                    'description' => '',
                    'sign' => 'mg',
                    'unit_id' => 2,
                    'language_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'carat',
                    'description' => '',
                    'sign' => 'c',
                    'unit_id' => 3,
                    'language_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            3 =>
                array(
                    'id' => 4,
                    'title' => 'gram',
                    'description' => '',
                    'sign' => 'g',
                    'unit_id' => 4,
                    'language_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            4 =>
                array(
                    'id' => 5,
                    'title' => 'kilogram',
                    'description' => '',
                    'sign' => 'kg',
                    'unit_id' => 5,
                    'language_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            5 =>
                array(
                    'id' => 6,
                    'title' => 'ton',
                    'description' => '',
                    'sign' => 't',
                    'unit_id' => 6,
                    'language_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 7,
                    'title' => 'pcs',
                    'description' => '',
                    'sign' => 'pcs',
                    'unit_id' => 7,
                    'language_id' => 1,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));
    }
}
