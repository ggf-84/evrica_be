<?php

use Illuminate\Database\Seeder;

class BoardLabelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('board_labels')->truncate();

        factory(App\Models\BoardLabels::class, 20)->create();
    }
}
