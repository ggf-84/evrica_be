<?php

use Illuminate\Database\Seeder;

class RightI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('right_i18n')->truncate();

        \DB::table('right_i18n')->insert(array(

            0 =>
                array(
                    'right_id' => 1,
                    'title' => 'Създаване на продукти',
                    'description' => 'Създаване на права за продукти',
                    'language_id' => 2,
                ),
            1 =>
                array(
                    'right_id' => 1,
                    'title' => 'Создание продуктов',
                    'description' => 'Създаване на права за продукти',
                    'language_id' => 3,
                ),
            2 =>
                array(
                    'right_id' => 1,
                    'title' => 'Create Products',
                    'description' => 'Create products rights',
                    'language_id' => 1,
                ),
        ));
    }
}
