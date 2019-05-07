<?php

use Illuminate\Database\Seeder;

class TaxRuleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('tax_rule')->truncate();

        \DB::table('tax_rule')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'company_id' => 1,
                    'order' => 1,
                    'category_id' => 1,
                    // 'rate_id' => 1,
                    'country_id' => 1,
                    'state_id' => 6,
                    'tax_rate' => 31.2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'company_id' => 2,
                    'order' => 1,
                    'category_id' => 3,
                    // 'rate_id' => 2,
                    'country_id' => 147,
                    'state_id' => 2486,
                    'tax_rate' => 753.2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'company_id' => 3,
                    'order' => 2,
                    'category_id' => 2,
                    // 'rate_id' => 2,
                    'country_id' => 97,
                    'state_id' => 1676,
                    'tax_rate' => 175.2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));
    }
}
