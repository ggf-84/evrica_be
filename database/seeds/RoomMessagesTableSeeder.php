<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class RoomMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('room_messages')->truncate();

        // Carbon::now()->subDays(30)

        $faker = Faker::create();
      	foreach (range(1,30) as $index) {
            $ran = array(3,4);
            $randomElement = $ran[array_rand($ran, 1)];
  	        DB::table('room_messages')->insert([
              'user_id' => $randomElement,
              'guest_id' => NULL,
              'room_id' => 16,
              'is_guest' => 0,
              'is_edited' => 0,
              'has_thumbnail' => 0,
              'is_notification' => 0,
              'message' => $faker->company,
              'created_at' =>  Carbon::now()->startOfDay(),
              'updated_at' =>  Carbon::now()->startOfDay(),
        ]);
      }


    }

}
