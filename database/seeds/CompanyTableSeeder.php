<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompanyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company')->truncate();

        for($i = 1; $i<=5; $i++){
            $company = factory(App\Models\Company::class)->create(['id' => $i]);
        }
    }
}
