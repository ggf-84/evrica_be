<?php

use Illuminate\Database\Seeder;

class DeItemLabelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('de_item_labels')->delete();

        \DB::table('de_item_labels')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_id' => 3,
                'item_id' => 3,
                'label_id' => 3,
                'created_at' => '2018-05-25 12:28:40',
                'updated_at' => '2018-05-25 12:28:40',
            ),
            1 =>
            array (
                'id' => 2,
                'user_id' => 3,
                'item_id' => 4,
                'label_id' => 3,
                'created_at' => '2018-05-25 12:28:51',
                'updated_at' => '2018-05-25 12:28:51',
            ),
            2 =>
            array (
                'id' => 3,
                'user_id' => 3,
                'item_id' => 5,
                'label_id' => 3,
                'created_at' => '2018-05-25 12:28:54',
                'updated_at' => '2018-05-25 12:28:54',
            ),
            3 =>
            array (
                'id' => 4,
                'user_id' => 3,
                'item_id' => 6,
                'label_id' => 3,
                'created_at' => '2018-05-25 12:28:57',
                'updated_at' => '2018-05-25 12:28:57',
            ),
        ));


    }
}
