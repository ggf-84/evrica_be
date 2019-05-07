<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('department')->truncate();

        factory(App\Models\Department::class, 20)->create();
    }
}
