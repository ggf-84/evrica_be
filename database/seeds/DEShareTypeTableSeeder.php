<?php

use Illuminate\Database\Seeder;

class DEShareTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('de_share_type')->truncate();
    }
}
