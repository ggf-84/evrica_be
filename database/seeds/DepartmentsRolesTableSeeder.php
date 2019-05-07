<?php

use Illuminate\Database\Seeder;

class DepartmentsRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('department_roles')->truncate();

        \DB::table('department_roles')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'department_id' => 1,
                    'role_id' => 1,
                ),
            1 =>
                array(
                    'id' => 2,
                    'department_id' => 2,
                    'role_id' => 2,
                ),
            2 =>
                array(
                    'id' => 3,
                    'department_id' => 3,
                    'role_id' => 3,
                ),
            3 =>
                array(
                    'id' => 4,
                    'department_id' => 4,
                    'role_id' => 3,
                ),
        ));
    }
}
