<?php

use App\Models\BoardLabels;
use App\Models\PmList;
use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('board')->truncate();
        \DB::table('list')->truncate();
        \DB::table('board_labels')->truncate();

        factory(App\Models\Board::class, 10)->create()->each(function($board) {
            PmList::create(['board_id' => $board->id, 'title' => 'To Do', ]);
            PmList::create(['board_id' => $board->id, 'title' => 'In Progress']);
            PmList::create(['board_id' => $board->id, 'title' => 'Done']);

            factory(App\Models\BoardLabels::class)->create(['board_id' => $board->id, 'title' => 'Important']);
            factory(App\Models\BoardLabels::class)->create(['board_id' => $board->id, 'title' => 'Bug']);
            factory(App\Models\BoardLabels::class)->create(['board_id' => $board->id, 'title' => 'Feature']);
        });
    }
}
