<?php

use Illuminate\Database\Seeder;

class ContractTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contract')->truncate();

        for($i=1; $i<=20; $i++){
            factory(App\Models\Contract::class)->create(['id' => $i]);
        }
    }
}
