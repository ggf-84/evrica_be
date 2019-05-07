<?php

use Illuminate\Database\Seeder;

class CounterPartiesTypeSeeder extends Seeder {

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run() {
        \DB::table('counterparty_types')->truncate();


        \DB::table('counterparty_types')->insert([
            'id' => 1,
            'department_id' => 29
        ]);

        \DB::table('department')->insert([
            'id' => 29,
            'user_id' => 3,
            'company_id' => 3
        ]);


        DB::table('department_roles')->insert([
            'department_id'=>29,
            'role_id'=>15
        ]);

        DB::table('role')->insert(['id'=>15,'code'=>'client']);

        DB::table('permission')->where('id',22)->delete();

        DB::table('permission')->insert(['id'=>22,'code'=>'order-write'],['id'=>23,'code'=>'order-read']);

        DB::table('role_permission')->insert(['role_id'=>15,'permission_id'=>22,'value'=>1],['role_id'=>15,'permission_id'=>23,'value'=>1]);
    }

}
