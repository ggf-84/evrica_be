<?php

use Illuminate\Database\Seeder;

class DEShareTypeI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('de_share_type_i18n')->truncate();
    }
}
