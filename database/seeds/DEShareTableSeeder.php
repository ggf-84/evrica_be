<?php

use Illuminate\Database\Seeder;

class DEShareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('de_share')->truncate();
    }
}
