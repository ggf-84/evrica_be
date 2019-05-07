<?php

use Illuminate\Database\Seeder;

class ContactPositionI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contact_position_i18n')->truncate();

        \DB::table('contact_position_i18n')->insert(
            array(
                0 =>
                    array(
                        'id' => 1,
                        'title' => 'Sales Manager',
                        'position_id' => 1,
                        'language_id' => 1,
                    ),
                1 =>
                    array(
                        'id' => 2,
                        'title' => 'Менеджер по продажам',
                        'position_id' => 1,
                        'language_id' => 3,
                    ),
                2 =>
                    array(
                        'id' => 3,
                        'title' => 'Sales Manager',
                        'position_id' => 2,
                        'language_id' => 1,
                    ),
                3 =>
                    array(
                        'id' => 4,
                        'title' => 'Менеджер по продажам',
                        'position_id' => 2,
                        'language_id' => 3,
                    ),
                4 =>
                    array(
                        'id' => 5,
                        'title' => 'Sales Manager',
                        'position_id' => 3,
                        'language_id' => 1,
                    ),
                5 =>
                    array(
                        'id' => 6,
                        'title' => 'Менеджер по продажам',
                        'position_id' => 3,
                        'language_id' => 3,
                    ),
                6 =>
                    array(
                        'id' => 7,
                        'title' => 'Accountant',
                        'position_id' => 4,
                        'language_id' => 1,
                    ),
                7 =>
                    array(
                        'id' => 8,
                        'title' => 'Бухгалтер',
                        'position_id' => 4,
                        'language_id' => 3,
                    ),
                8 =>
                    array(
                        'id' => 9,
                        'title' => 'Accountant',
                        'position_id' => 5,
                        'language_id' => 1,
                    ),
                9 =>
                    array(
                        'id' => 10,
                        'title' => 'Бухгалтер',
                        'position_id' => 5,
                        'language_id' => 3,
                    ),
                10 =>
                    array(
                        'id' => 11,
                        'title' => 'Accountant',
                        'position_id' => 6,
                        'language_id' => 1,
                    ),
                11 =>
                    array(
                        'id' => 12,
                        'title' => 'Бухгалтер',
                        'position_id' => 6,
                        'language_id' => 3,
                    ),
                12 =>
                    array(
                        'id' => 13,
                        'title' => 'Executive Director',
                        'position_id' => 7,
                        'language_id' => 1,
                    ),
                13 =>
                    array(
                        'id' => 14,
                        'title' => 'Исполнительный директор',
                        'position_id' => 7,
                        'language_id' => 3,
                    ),
                14 =>
                    array(
                        'id' => 15,
                        'title' => 'Executive Director',
                        'position_id' => 8,
                        'language_id' => 1,
                    ),
                15 =>
                    array(
                        'id' => 16,
                        'title' => 'Исполнительный директор',
                        'position_id' => 8,
                        'language_id' => 3,
                    ),
                16 =>
                    array(
                        'id' => 17,
                        'title' => 'Executive Director',
                        'position_id' => 9,
                        'language_id' => 1,
                    ),
                17 =>
                    array(
                        'id' => 18,
                        'title' => 'Исполнительный директор',
                        'position_id' => 9,
                        'language_id' => 3,
                    ),

            ));
    }
}
