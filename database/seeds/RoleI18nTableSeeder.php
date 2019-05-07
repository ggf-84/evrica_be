<?php

use Illuminate\Database\Seeder;

class RoleI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('role_i18n')->truncate();

        \DB::table('role_i18n')->insert(array(

            0 =>
                array(
                    'role_id' => 1,
                    'title' => 'търговски управител',
                    'description' => null,
                    'language_id' => 2,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            1 =>
                array(
                    'role_id' => 2,
                    'title' => 'продуктов мениджър',
                    'description' => null,
                    'language_id' => 2,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            2 =>
                array(
                    'role_id' => 3,
                    'title' => 'мениджър продажби',
                    'description' => null,
                    'language_id' => 2,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            3 =>
                array(
                    'role_id' => 1,
                    'title' => 'менеджер по маркетингу',
                    'description' => null,
                    'language_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            4 =>
                array(
                    'role_id' => 2,
                    'title' => 'менеджер по продукции',
                    'description' => null,
                    'language_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            5 =>
                array(
                    'role_id' => 3,
                    'title' => 'менеджер по продажам',
                    'description' => null,
                    'language_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            6 =>
                array(
                    'role_id' => 1,
                    'title' => 'marketing manager',
                    'description' => null,
                    'language_id' => 1,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            7 =>
                array(
                    'role_id' => 2,
                    'title' => 'product manager',
                    'description' => null,
                    'language_id' => 1,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            8 =>
                array(
                    'role_id' => 3,
                    'title' => 'sales manager',
                    'description' => null,
                    'language_id' => 1,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            9 =>
                array(
                    'role_id' => 5,
                    'title' => 'read department',
                    'description' => null,
                    'language_id' => 1,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            10 =>
                array(
                    'role_id' => 6,
                    'title' => 'write department',
                    'description' => null,
                    'language_id' => 1,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            11 =>
                array(
                    'role_id' => 6,
                    'title' => 'delete department',
                    'description' => null,
                    'language_id' => 1,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
        ));
    }
}
