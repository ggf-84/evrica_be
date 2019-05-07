<?php

use Illuminate\Database\Seeder;

// use Faker\Factory as Faker;
// use App\Models\Products;

class ProductI18nSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // // Create a country based faker
        // $faker = Faker::create('fr_FR');
        //
        // for($i=0;$i<=100000;$i++){
        //     $newProduct =  new Products;
        //     $newProduct->currency_id=1;
        //     $newProduct->price=mt_rand(1,2000)/mt_rand(1,100);
        //     $newProduct->vat_id=1;
        //     $newProduct->vat_on=1;
        //     $newProduct->unit_id=2;
        //     $newProduct->category_id=1;
        //     $newProduct->order=1;
        //     $newProduct->company=3;
        //     $newProduct->save();
        //
        //     DB::table('product_i18n')->insert([
        //         'product_id' => $newProduct->id,
        //         'title' => $faker->colorName,
        //         'description' => "",
        //         'language_id' => 3,
        //         'created_at' => \Carbon\Carbon::now(),
        //         'updated_at' => \Carbon\Carbon::now(),
        //     ]);
        // }

        \DB::table('product_i18n')->truncate();

        \DB::table('product_i18n')->insert(array(
            0 =>
                array(
                    'product_id' => 4,
                    'title' => 'Pizza',
                    'description' => null,
                    'language_id' => 1,
                    // 'created_at' => '2017-11-15 10:05:36',
                    // 'updated_at' => '2017-11-15 15:30:05',
                ),
            1 =>
                array(
                    'product_id' => 4,
                    'title' => 'Пица',
                    'description' => null,
                    'language_id' => 2,
                    // 'created_at' => '2017-11-15 10:05:36',
                    // 'updated_at' => '2017-11-15 15:30:05',
                ),
            2 =>
                array(
                    'product_id' => 4,
                    'title' => 'Пиццa',
                    'description' => null,
                    'language_id' => 3,
                    // 'created_at' => '2017-11-15 10:05:36',
                    // 'updated_at' => '2017-11-15 15:30:05',
                ),
            3 =>
                array(
                    'product_id' => 5,
                    'title' => 'Steering wheel for car',
                    'description' => null,
                    'language_id' => 1,
                    // 'created_at' => '2017-11-15 10:05:36',
                    // 'updated_at' => '2017-11-15 15:30:05',
                ),
            4 =>
                array(
                    'product_id' => 5,
                    'title' => 'Волан за кола',
                    'description' => null,
                    'language_id' => 2,
                    // 'created_at' => '2017-11-15 10:05:36',
                    // 'updated_at' => '2017-11-15 15:30:05',
                ),
            5 =>
                array(
                    'product_id' => 5,
                    'title' => 'Руль для машины',
                    'description' => null,
                    'language_id' => 3,
                    // 'created_at' => '2017-11-15 10:05:36',
                    // 'updated_at' => '2017-11-15 15:30:05',
                ),
            6 =>
                array(
                    'product_id' => 6,
                    'title' => 'Chair cover',
                    'description' => null,
                    'language_id' => 1,
                    // 'created_at' => '2017-11-15 10:05:36',
                    // 'updated_at' => '2017-11-15 15:30:05',
                ),
            7 =>
                array(
                    'product_id' => 6,
                    'title' => 'Капак на стола',
                    'description' => null,
                    'language_id' => 2,
                    // 'created_at' => '2017-11-15 10:05:36',
                    // 'updated_at' => '2017-11-15 15:30:05',
                ),
            8 =>
                array(
                    'product_id' => 6,
                    'title' => 'Чехол для кресла',
                    'description' => null,
                    'language_id' => 3,
                    // 'created_at' => '2017-11-15 10:05:36',
                    // 'updated_at' => '2017-11-15 15:30:05',
                ),

        ));


    }
}
