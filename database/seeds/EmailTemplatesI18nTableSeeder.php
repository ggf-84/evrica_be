<?php

use Illuminate\Database\Seeder;

class EmailTemplatesI18nTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_templates_i18n')->truncate();
        
        \DB::table('email_templates_i18n')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Template No.1',
                'description' => NULL,
                'template_id' => 1,
                'language_id' => 1,
                'created_at' => '2018-01-30 00:00:00',
                'updated_at' => '2018-01-30 00:00:00',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Template No.2',
                'description' => NULL,
                'template_id' => 2,
                'language_id' => 1,
                'created_at' => '2018-01-30 00:00:00',
                'updated_at' => '2018-01-30 00:00:00',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Template No.3',
                'description' => NULL,
                'template_id' => 3,
                'language_id' => 1,
                'created_at' => '2018-01-30 00:00:00',
                'updated_at' => '2018-01-30 00:00:00',
            ),
        ));
        
        
    }
}