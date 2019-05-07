<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('team')->truncate();
        \DB::table('team_members')->truncate();

        factory(App\Models\Team::class, 5)->create()->each(function($team) {
            $team->members()->saveMany(factory(App\Models\TeamMembers::class, rand(1,3))->make());
        });
    }
}
