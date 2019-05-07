<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Team 
        DB::table('team')->delete();
        $team = DB::table('team')->insert(
            [
                'id' => 1,
                'title' => 'New Team',
                'company_id' => 3
            ]
        );

        //team members
        DB::table('team_members')->delete();
        DB::table('team_members')->insert(
            [
                'team_id' => 1,
                'user_id' => 3
            ]
        );

        //Board
        DB::table('board')->delete();
        DB::table('board')->insert(
            [
                'id' => 1,
                'title' => 'Your new board',
                'team_id' => 1,
                'company_id' => 3
            ]
        );

        //Lists
        DB::table('list')->delete();
        DB::table('list')->insert([
            [
                'id' => 1,
                'title' => 'To Do',
                'board_id' => 1
            ],
            [
                'id' => 2,
                'title' => 'In Progress',
                'board_id' => 1
            ],
            [
                'id' => 3,
                'title' => 'Done',
                'board_id' => 1
            ]
        ]);

        // Colors for board labels
        DB::table('color')->delete();
        DB::table('color')->insert([
            [
                'id' => 1,
                'color' => '#439D6E'
            ],
            [
                'id' => 2,
                'color' => '#E73131'
            ],
            [
                'id' => 3,
                'color' => '#87CEFA'
            ],
            [
                'id' => 4,
                'color' => '#DFF913'
            ]
        ]);

        // Board Labels
        DB::table('board_labels')->delete();
        DB::table('board_labels')->insert(array(
            [
                'id' => 1,
                'board_id' => 1,
                'color_id' => 1,
                'title' => 'Low Priority'
            ],
            [
                'id' => 2,
                'board_id' => 1,
                'color_id' => 2,
                'title' => 'Medium Priority'
            ],
            [
                'id' => 3,
                'board_id' => 1,
                'color_id' => 3,
                'title' => 'High Priority'
            ]
        ));
    }
}
