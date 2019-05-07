<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CounterpartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('counterparty')->truncate();

        $faker = Faker::create('App\Models\Counterparties');
        $states = \App\Models\State::all();
        for($i = 1; $i<=100000; $i++){
            $state = $states->random();
            $country_id = $state->country_id;
            $data[] = [
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'address' => $faker->address,
                'country_id' => $country_id,
                'state_id' => $state->id,
                'postal_code' => $faker->postcode,
                'phone' => $faker->phoneNumber,
                'company_id' => rand(1,3),
                'type_id' => 1,
                'auth_id' => rand(0,1) ? 3 : 0,
                'group_id' => 1,
                'active_tax' => rand(0,1),
                'created_at' => \Carbon\Carbon::now()->subDay(rand(10,100))->toDateString(),
                'updated_at' => \Carbon\Carbon::now()->subDay(rand(0,10))->toDateString(),
            ];
            if($i%200 == 0){
                \DB::table('counterparty')->insert($data);
                $data = [];
            }
        }
    }
}
