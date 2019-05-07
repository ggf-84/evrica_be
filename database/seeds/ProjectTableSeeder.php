<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('project')->truncate();
        
        \DB::table('project')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'New Project',
                'description' => 'Description Project',
                'start_time' => '2017-06-19 12:52:28',
                'deadline' => '2017-06-30 12:52:28',
                'estimation' => 4,
                'estimation_unit' => 'Days',
                'is_important' => 1,
                'is_finished' => 1,
                'creator_id' => 3,
                'project_manager_id' => 3,
                'company_id' => 3,
                'created_at' => '2017-06-19 09:53:32',
                'updated_at' => '2017-06-19 09:53:32',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'New Project',
                'description' => 'Description Project',
                'start_time' => '2017-06-19 12:52:28',
                'deadline' => '2017-06-30 12:52:28',
                'estimation' => 4,
                'estimation_unit' => 'Days',
                'is_important' => 1,
                'is_finished' => 1,
                'creator_id' => 3,
                'project_manager_id' => 2,
                'company_id' => 2,
                'created_at' => '2017-06-19 09:53:32',
                'updated_at' => '2017-06-19 09:53:32',
            ),
        ));
        
        
    }
}