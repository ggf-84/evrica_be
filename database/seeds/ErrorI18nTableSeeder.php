<?php

use Illuminate\Database\Seeder;

class ErrorI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('error_i18n')->truncate();

        \DB::table('error_i18n')->insert(array(

            0 =>
                array(
                    'error_id' => 1,
                    'language_id' => 2,
                    'content' => 'не е намерен',
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
            1 =>
                array(
                    'error_id' => 2,
                    'language_id' => 2,
                    'content' => 'вътрешна грешка на сървъра',
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
            2 =>
                array(
                    'error_id' => 3,
                    'language_id' => 2,
                    'content' => 'неупълномощен',
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
            3 =>
                array(
                    'error_id' => 1,
                    'language_id' => 3,
                    'content' => 'не найдено',
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
            4 =>
                array(
                    'error_id' => 2,
                    'language_id' => 3,
                    'content' => 'внутренняя ошибка сервера',
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),
            5 =>
                array(
                    'error_id' => 3,
                    'language_id' => 3,
                    'content' => 'неразрешенный',
                    'created_at' => '2017-11-15 10:05:36',
                    'updated_at' => '2017-11-15 15:30:05',
                ),


        ));
    }
}
