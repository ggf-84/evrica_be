<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->truncate();

        $faker = Faker::create('App\Models\Admin');
        $data = [];

        for ($i = 1; $i <= 4; $i++) {
            $data[] = [
                'id' => $i,
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => 'admin'.$i.'@mail.com',
                'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
                'status' => $faker->boolean,
                'created_at' => '2017-06-16 10:04:46',
                'updated_at' => '2017-06-16 10:05:27',
            ];
        }
        \DB::table('admins')->insert($data);
    }
}
