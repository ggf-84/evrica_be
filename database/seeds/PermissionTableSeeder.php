<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission')->delete();
        
        \DB::table('permission')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'department_role-read',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'products-read',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => 'sales-write',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => 'sales-read',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => 'sales-delete',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => 'department-read',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => 'department-write',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => 'department-delete',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => 'company-read',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => 'company-write',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => 'company-delete',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => 'departments_roles-read',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => 'departments_roles-write',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => 'departments_roles-delete',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => 'departments_users-read',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => 'departments_users-write',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => 'departments_users-delete',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => 'domain-read',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => 'domain-write',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => 'domain-delete',
                'created_at' => '2017-06-16 00:00:00',
                'updated_at' => '2017-06-16 00:00:00',
            ),
            20 => 
            array (
                'id' => 22,
                'code' => 'order-write',
                'created_at' => '2018-05-14 00:00:00',
                'updated_at' => '2018-05-14 00:00:00',
            ),
            21 => 
            array (
                'id' => 23,
                'code' => 'livechat_agent',
                'created_at' => '2018-05-14 00:00:00',
                'updated_at' => '2018-05-14 00:00:00',
            ),
            22 => 
            array (
                'id' => 49,
                'code' => 'de_can_create',
                'created_at' => '2018-05-14 13:52:44',
                'updated_at' => '2018-05-14 13:52:44',
            ),
            23 => 
            array (
                'id' => 50,
                'code' => 'de_can_edit',
                'created_at' => '2018-05-14 13:52:44',
                'updated_at' => '2018-05-14 13:52:44',
            ),
            24 => 
            array (
                'id' => 51,
                'code' => 'de_can_delete',
                'created_at' => '2018-05-14 13:52:44',
                'updated_at' => '2018-05-14 13:52:44',
            ),
            25 => 
            array (
                'id' => 52,
                'code' => 'de_can_view',
                'created_at' => '2018-05-14 13:52:44',
                'updated_at' => '2018-05-14 13:52:44',
            ),
            26 => 
            array (
                'id' => 53,
                'code' => 'de_can_share',
                'created_at' => '2018-05-14 13:52:44',
                'updated_at' => '2018-05-14 13:52:44',
            ),
            27 => 
            array (
                'id' => 54,
                'code' => 'de_can_copy',
                'created_at' => '2018-05-18 10:17:46',
                'updated_at' => '2018-05-18 10:17:46',
            ),
            28 => 
            array (
                'id' => 55,
                'code' => 'de_can_upload',
                'created_at' => '2018-05-21 08:32:39',
                'updated_at' => '2018-05-21 08:32:39',
            ),
            29 => 
            array (
                'id' => 56,
                'code' => 'de_can_download',
                'created_at' => '2018-05-24 11:20:49',
                'updated_at' => '2018-05-24 11:20:49',
            ),
        ));
        
        
    }
}