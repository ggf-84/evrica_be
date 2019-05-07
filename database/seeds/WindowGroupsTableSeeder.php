<?php

use Illuminate\Database\Seeder;

class WindowGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('window_groups')->truncate();

        \DB::table('window_groups')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'name' => 'ios',
                    'parent' => '0',
                    'created_at' => '2017-11-16 10:45:32',
                    'updated_at' => '2017-11-16 10:45:32',
                ),
            1 =>
                array(
                    'id' => 2,
                    'name' => 'main',
                    'parent' => '0',
                    'created_at' => '2017-11-16 10:45:32',
                    'updated_at' => '2017-11-16 10:45:32',
                ),
            2 =>
                array(
                    'id' => 3,
                    'name' => 'crm',
                    'parent' => '0',
                    'created_at' => '2017-11-16 10:45:32',
                    'updated_at' => '2017-11-16 10:45:32',
                ),
            3 =>
                array(
                    'id' => 18,
                    'name' => 'CRM',
                    'parent' => '0',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            4 =>
                array(
                    'id' => 19,
                    'name' => 'crmcurrency',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            5 =>
                array(
                    'id' => 20,
                    'name' => 'crmtaxrule',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            6 =>
                array(
                    'id' => 21,
                    'name' => 'crmcompanyrate',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            7 =>
                array(
                    'id' => 22,
                    'name' => 'crmcompanycurrency',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            8 =>
                array(
                    'id' => 23,
                    'name' => 'crmtaxrate',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            9 =>
                array(
                    'id' => 24,
                    'name' => 'crmrates',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            10 =>
                array(
                    'id' => 25,
                    'name' => 'crmquotes',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            11 =>
                array(
                    'id' => 26,
                    'name' => 'crmproducts',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            12 =>
                array(
                    'id' => 27,
                    'name' => 'crmcountry',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            13 =>
                array(
                    'id' => 28,
                    'name' => 'crmstates',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            14 =>
                array(
                    'id' => 29,
                    'name' => 'crmmeasureunits',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            15 =>
                array(
                    'id' => 30,
                    'name' => 'crmcontacts',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            16 =>
                array(
                    'id' => 31,
                    'name' => 'crmcontracts',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            17 =>
                array(
                    'id' => 32,
                    'name' => 'crmcounterparties',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            18 =>
                array(
                    'id' => 33,
                    'name' => 'crmcounterpartiesgroups',
                    'parent' => '3',
                    'created_at' => '2018-01-12 01:00:00',
                    'updated_at' => '2018-01-12 01:00:00',
                ),
            19 =>
                array(
                    'id' => 34,
                    'name' => 'crmquotestatus',
                    'parent' => '3',
                    'created_at' => '2018-01-11 21:00:00',
                    'updated_at' => '2018-01-11 21:00:00',
                ),
            20 =>
                array(
                    'id' => 35,
                    'name' => 'crmproducts',
                    'parent' => '3',
                    'created_at' => '2018-01-11 21:00:00',
                    'updated_at' => '2018-01-11 21:00:00',
                ),
            21 =>
                array(
                    'id' => 36,
                    'name' => 'crmproductcategory',
                    'parent' => '3',
                    'created_at' => '2018-01-11 21:00:00',
                    'updated_at' => '2018-01-11 21:00:00',
                ),
            22 =>
                array(
                    'id' => 37,
                    'name' => 'crminvoice',
                    'parent' => '3',
                    'created_at' => '2018-01-11 20:00:00',
                    'updated_at' => '2018-01-11 20:00:00',
                ),
            23 =>
                array(
                    'id' => 38,
                    'name' => 'crmlead',
                    'parent' => '3',
                    'created_at' => '2018-01-11 20:00:00',
                    'updated_at' => '2018-01-11 20:00:00',
                ),
            24 =>
                array(
                    'id' => 39,
                    'name' => 'crmorders',
                    'parent' => '3',
                    'created_at' => '2018-01-11 20:00:00',
                    'updated_at' => '2018-01-11 20:00:00',
                ),
            25 =>
                array(
                    'id' => 40,
                    'name' => 'crmordersstatus',
                    'parent' => '3',
                    'created_at' => '2018-01-11 20:00:00',
                    'updated_at' => '2018-01-11 20:00:00',
                ),
            26 =>
                array(
                    'id' => 41,
                    'name' => 'crmtransaction',
                    'parent' => '3',
                    'created_at' => '2018-01-11 20:00:00',
                    'updated_at' => '2018-01-11 20:00:00',
                ),
            27 =>
                array(
                    'id' => 42,
                    'name' => 'departments',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            28 =>
                array(
                    'id' => 43,
                    'name' => 'units',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            29 =>
                array(
                    'id' => 44,
                    'name' => 'unitstype',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            30 =>
                array(
                    'id' => 45,
                    'name' => 'crminvoicestatus',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            31 =>
                array(
                    'id' => 46,
                    'name' => 'crmpaymentgateways',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            32 =>
                array(
                    'id' => 47,
                    'name' => 'counterpartybalance',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            33 =>
                array(
                    'id' => 48,
                    'name' => 'contactposition',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            34 =>
                array(
                    'id' => 49,
                    'name' => 'contractypes',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            35 =>
                array(
                    'id' => 50,
                    'name' => 'domainrecords',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            36 =>
                array(
                    'id' => 51,
                    'name' => 'crmleadstatus',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            37 =>
                array(
                    'id' => 52,
                    'name' => 'language',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            38 =>
                array(
                    'id' => 53,
                    'name' => 'company',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            39 =>
                array(
                    'id' => 54,
                    'name' => 'users',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            40 =>
                array(
                    'id' => 55,
                    'name' => 'counterpartytype',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            41 =>
                array(
                    'id' => 56,
                    'name' => 'companysettings',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            42 =>
                array(
                    'id' => 57,
                    'name' => 'emailtemplates',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            43 =>
                array(
                    'id' => 58,
                    'name' => 'error',
                    'parent' => '3',
                    'created_at' => '2018-01-11 19:00:00',
                    'updated_at' => '2018-01-11 19:00:00',
                ),
            44 =>
                array(
                    'id' => 59,
                    'name' => 'counterpartsDataTable',
                    'parent' => '32',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            45 =>
                array(
                    'id' => 60,
                    'name' => 'ios',
                    'parent' => '0',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
        ));


    }
}
