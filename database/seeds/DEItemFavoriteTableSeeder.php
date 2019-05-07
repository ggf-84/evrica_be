<?php

use Illuminate\Database\Seeder;

class DEItemFavoriteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('de_item_favorite')->truncate();
    }
}
