<?php

use Illuminate\Database\Seeder;

class TaxRuleI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('tax_rule_i18n')->truncate();

        \DB::table('tax_rule_i18n')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'UK VAT',
                    'description' => NULL,
                    'rule_id' => 1,
                    'language_id' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'RU VAT',
                    'description' => NULL,
                    'rule_id' => 2,
                    'language_id' => 3,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'RO VAT',
                    'description' => NULL,
                    'rule_id' => 3,
                    'language_id' => 4,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));

    }
}
