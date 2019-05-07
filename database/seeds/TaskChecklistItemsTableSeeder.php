<?php

use Illuminate\Database\Seeder;

class TaskChecklistItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('checklist_items')->truncate();

        factory(App\Models\ChecklistItem::class, 20)->create();
    }
}
