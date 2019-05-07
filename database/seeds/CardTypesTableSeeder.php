<?php

use Illuminate\Database\Seeder;

class CardTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('card_types')->truncate();

        \DB::table('card_types')->insert(array(
            0 =>
                array(
                    'id' => 1,
                ),
            1 =>
                array(
                    'id' => 2,
                ),
            2 =>
                array(
                    'id' => 3,
                ),
        ));
    }
}
