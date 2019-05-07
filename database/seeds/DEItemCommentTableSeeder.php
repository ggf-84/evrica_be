<?php

use Illuminate\Database\Seeder;

class DEItemCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('de_item_comment')->truncate();
    }
}
