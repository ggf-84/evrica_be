<?php

use Illuminate\Database\Seeder;

class PermissionI18nTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_i18n')->delete();
        
        \DB::table('permission_i18n')->insert(array (
            0 => 
            array (
                'id' => 1,
                'permission_id' => 1,
                'title' => 'четете отдела',
                'description' => '',
                'language_id' => 2,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'permission_id' => 2,
                'title' => 'чете продукти',
                'description' => '',
                'language_id' => 2,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'permission_id' => 3,
                'title' => 'пишат продажбите',
                'description' => '',
                'language_id' => 2,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'permission_id' => 4,
                'title' => 'прочетете продажбите',
                'description' => '',
                'language_id' => 2,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'permission_id' => 5,
                'title' => 'изтриване на продажбите',
                'description' => '',
                'language_id' => 2,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'permission_id' => 6,
                'title' => 'Read department',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'permission_id' => 7,
                'title' => 'Write department',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            7 => 
            array (
                'id' => 8,
                'permission_id' => 8,
                'title' => 'Delete department',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            8 => 
            array (
                'id' => 9,
                'permission_id' => 9,
                'title' => 'Read company',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            9 => 
            array (
                'id' => 10,
                'permission_id' => 10,
                'title' => 'Write company',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            10 => 
            array (
                'id' => 11,
                'permission_id' => 11,
                'title' => 'Delete company',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            11 => 
            array (
                'id' => 12,
                'permission_id' => 12,
                'title' => 'Read department roles',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            12 => 
            array (
                'id' => 13,
                'permission_id' => 13,
                'title' => 'Write department roles',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            13 => 
            array (
                'id' => 14,
                'permission_id' => 14,
                'title' => 'Delete department roles',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            14 => 
            array (
                'id' => 31,
                'permission_id' => 49,
                'title' => 'Create',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            15 => 
            array (
                'id' => 32,
                'permission_id' => 50,
                'title' => 'Edit',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            16 => 
            array (
                'id' => 33,
                'permission_id' => 51,
                'title' => 'Delete',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            17 => 
            array (
                'id' => 34,
                'permission_id' => 52,
                'title' => 'View',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            18 => 
            array (
                'id' => 35,
                'permission_id' => 53,
                'title' => 'Share',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            19 => 
            array (
                'id' => 36,
                'permission_id' => 54,
            'title' => 'Copy (duplicate)',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            20 => 
            array (
                'id' => 37,
                'permission_id' => 55,
                'title' => 'Upload',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            21 => 
            array (
                'id' => 38,
                'permission_id' => 56,
                'title' => 'Download',
                'description' => '',
                'language_id' => 1,
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
        ));
        
        
    }
}