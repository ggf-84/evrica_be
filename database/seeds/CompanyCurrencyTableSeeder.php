<?php

use Illuminate\Database\Seeder;

class CompanyCurrencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('company_currency')->truncate();

        for($i=1; $i<=30; $i++){
            factory(App\Models\CompanyCurrency::class)->create(['id' => $i]);
        }
    }
}
