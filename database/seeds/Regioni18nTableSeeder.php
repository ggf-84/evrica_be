<?php

use Illuminate\Database\Seeder;

class Regioni18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('region_i18n')->truncate();

        \DB::table('region_i18n')->insert(array(
          0 =>
              array(
                  'id' => 1,
                  'title' => 'Sant Julia de Loria',
                  'description' => null,
                  'region_id' => 1,
                  'language_id' => 1,
                  'created_at' => '2017-07-14 00:00:00',
                  'updated_at' => '2017-07-14 00:00:00',
              ),
          1 =>
              array(
                  'id' => 2,
                  'title' => 'Andorra la Vella',
                  'description' => null,
                  'region_id' => 2,
                  'language_id' => 1,
                  'created_at' => '2017-07-14 00:00:00',
                  'updated_at' => '2017-07-14 00:00:00',
              ),
          2 =>
              array(
                  'id' => 3,
                  'title' => 'La Massana',
                  'description' => null,
                  'region_id' => 3,
                  'language_id' => 1,
                  'created_at' => '2017-07-14 00:00:00',
                  'updated_at' => '2017-07-14 00:00:00',
              ),
          3 =>
              array(
                  'id' => 4,
                  'title' => 'САНТ-ЖУЛИЯ-ДЕ-ЛОРИЯ',
                  'description' => null,
                  'region_id' => 1,
                  'language_id' => 3,
                  'created_at' => '2017-07-14 00:00:00',
                  'updated_at' => '2017-07-14 00:00:00',
              ),
        ));
    }
}
