<?php

use Illuminate\Database\Seeder;

class DEItemTrashTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('de_item_trash')->truncate();
    }
}
