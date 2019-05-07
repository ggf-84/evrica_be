<?php

use Illuminate\Database\Seeder;

class DeItemTypeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('de_item_type')->delete();

        \DB::table('de_item_type')->insert(array (
            0 =>
            array (
                'id' => 1,
                'code' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'code' => 'folder',
                'created_at' => '2018-05-03 13:15:27',
                'updated_at' => '2018-05-03 13:15:27',
            ),
            2 =>
            array (
                'id' => 3,
                'code' => 'file',
                'created_at' => '2018-05-03 13:15:28',
                'updated_at' => '2018-05-03 13:15:28',
            ),
        ));


    }
}
