<?php

use Illuminate\Database\Seeder;

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('language')->truncate();

        \DB::table('language')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'code' => 'en',
                    'title' => 'english',
                    'description' => null,
                    'icon' => null,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'code' => 'bg',
                    'title' => 'bulgarian',
                    'description' => null,
                    'icon' => null,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'code' => 'ru',
                    'title' => 'russian',
                    'description' => null,
                    'icon' => null,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            3 =>
                array(
                    'id' => 4,
                    'code' => 'ro',
                    'title' => 'romanian',
                    'description' => null,
                    'icon' => null,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            4 =>
                array(
                    'id' => 5,
                    'code' => 'ger',
                    'title' => 'germanic',
                    'description' => null,
                    'icon' => null,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));

    }
}
