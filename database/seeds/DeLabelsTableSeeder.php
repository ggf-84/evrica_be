<?php

use Illuminate\Database\Seeder;

class DeLabelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('de_labels')->delete();

        \DB::table('de_labels')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 3,
                'title' => 'ok',
                'color_id' => 1,
                'created_at' => '2018-05-25 12:33:20',
                'updated_at' => '2018-05-25 12:33:20',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 3,
                'title' => 'wix',
                'color_id' => 1,
                'created_at' => '2018-05-25 12:35:15',
                'updated_at' => '2018-05-25 12:35:15',
            ),
        ));


    }
}
