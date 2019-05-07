<?php

use Illuminate\Database\Seeder;

class DepartmentI18nTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('department_i18n')->truncate();

        for ($i = 1; $i <= 20; $i++) {
            for ($j = 1; $j <= 3; $j++){
                factory(App\Models\DepartmentContent::class)->create(['department_id' => $i, 'language_id' => $j]);
            }
        }

//        \DB::table('department_i18n')->insert(array(
//            0 =>
//                array(
//                    'department_id' => 1,
//                    'title' => 'Sales department No.1',
//                    'language_id' => 1,
//                ),
//            2 =>
//                array(
//                    'department_id' => 1,
//                    'title' => 'Отдел продаж Но.1',
//                    'language_id' => 3,
//                ),
//            3 =>
//                array(
//                    'department_id' => 1,
//                    'title' => 'Отдел продажби Но.1',
//                    'language_id' => 2,
//                ),
//            4 =>
//                array(
//                    'department_id' => 2,
//                    'title' => 'Advertising department No.1',
//                    'language_id' => 1,
//                ),
//            5 =>
//                array(
//                    'department_id' => 2,
//                    'title' => 'Отдел рекламы Нo.1',
//                    'language_id' => 3,
//                ),
//            6 =>
//                array(
//                    'department_id' => 2,
//                    'title' => 'Рекламен отдел Но.1',
//                    'language_id' => 2,
//                ),
//            7 =>
//                array(
//                    'department_id' => 3,
//                    'title' => 'Marketing department No.1',
//                    'language_id' => 1,
//                ),
//            8 =>
//                array(
//                    'department_id' => 3,
//                    'title' => 'Маркетингов отдел Нo.1',
//                    'language_id' => 2,
//                ),
//            9 =>
//                array(
//                    'department_id' => 3,
//                    'title' => 'Отдел маркетинга Нo.1',
//                    'description' => null,
//                    'language_id' => 3,
//                    'created_at' => '2017-06-16 10:05:36',
//                    'updated_at' => '2017-07-04 15:30:05',
//                ),
//
//        ));

    }
}
