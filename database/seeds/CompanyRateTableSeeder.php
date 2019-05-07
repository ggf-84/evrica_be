<?php

use Illuminate\Database\Seeder;

class CompanyRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_rates')->truncate();

        for($i=1; $i<=20; $i++){
            factory(App\Models\CompanyRate::class)->create(['id' => $i]);
        }
    }
}
