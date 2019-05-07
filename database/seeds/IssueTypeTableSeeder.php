<?php

use Illuminate\Database\Seeder;

class IssueTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('issue_type')->truncate();
        
        \DB::table('issue_type')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Task',
                'company_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Event',
                'company_id' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}