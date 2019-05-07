<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('role')->truncate();

        \DB::table('role')->insert(array(

            0 =>
                array(
                    'id' => 1,
                    'code' => 'marketing_manager',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'code' => 'product_manager',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'code' => 'sales_manager',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            3 =>
                array(
                    'id' => 4,
                    'code' => 'company_admin',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            4 =>
                array(
                    'id' => 5,
                    'code' => 'department_admin',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            5 =>
                array(
                    'id' => 6,
                    'code' => 'department_roles_manager',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            6 =>
                array(
                    'id' => 7,
                    'code' => 'department_users_manager',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            7 =>
                array(
                    'id' => 8,
                    'code' => 'domain_admin',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            8 =>
                array(
                    'id' => 9,
                    'code' => 'livechat_agent',
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
        ));
    }
}
