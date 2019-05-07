<?php

use App\Models\BoardLabels;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tasks')->truncate();
        \DB::table('task_comments')->truncate();
        \DB::table('task_label')->truncate();
        \DB::table('task_user')->truncate();
        \DB::table('task_checklists')->truncate();
        \DB::table('checklist_items')->truncate();

        factory(App\Models\Task::class, 30)->create()->each(function ($task) {
            /** @var \App\Models\Task $task */
            $task->members()->sync(User::where('company_id', $task->company_id)->pluck('id')->random());
            $task->labels()->sync(BoardLabels::where('board_id', $task->pm_list->board_id)->pluck('id')->random());

            factory(App\Models\TaskChecklist::class, 2)->create(['task_id' => $task->id])->each(function ($checklist) {
                factory(App\Models\ChecklistItem::class, 3)->create(['checklist_id' => $checklist->id]);
            });

            $users = User::where('company_id', $task->company_id)->get();
            factory(App\Models\TaskComment::class, 3)->create(['task_id' => $task->id, 'user_id' => $users->random()->id]);
        });
    }
}
