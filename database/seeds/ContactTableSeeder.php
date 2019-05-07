<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contact')->truncate();

        for ($i=1; $i<=30; $i++){
            factory(App\Models\Contact::class)->create(['id' => $i]);
        }

    }
}
