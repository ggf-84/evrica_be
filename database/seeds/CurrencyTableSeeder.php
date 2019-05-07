<?php

use Illuminate\Database\Seeder;

class CurrencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('currency')->truncate();

        \DB::table('currency')->insert(array (
            0 =>
            array (
                'id' => 1,
                'prefix' => '؋',
                'sign' => 'AFN',
                'suffix' => NULL,
                'country_id' => 1,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            1 =>
            array (
                'id' => 2,
                'prefix' => '€',
                'sign' => 'EUR',
                'suffix' => NULL,
                'country_id' => 4,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            2 =>
            array (
                'id' => 3,
                'prefix' => 'L',
                'sign' => 'ALL',
                'suffix' => NULL,
                'country_id' => 5,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            3 =>
            array (
                'id' => 4,
                'prefix' => 'د.ج',
                'sign' => 'DZD',
                'suffix' => NULL,
                'country_id' => 63,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            4 =>
            array (
                'id' => 5,
                'prefix' => '$',
                'sign' => 'USD',
                'suffix' => NULL,
                'country_id' => 10,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            5 =>
            array (
                'id' => 6,
                'prefix' => 'Kz',
                'sign' => 'AOA',
                'suffix' => NULL,
                'country_id' => 2,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            6 =>
            array (
                'id' => 7,
                'prefix' => '$',
                'sign' => 'XCD',
                'suffix' => NULL,
                'country_id' => 3,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            7 =>
            array (
                'id' => 8,
                'prefix' => '$',
                'sign' => 'AUD',
                'suffix' => NULL,
                'country_id' => 11,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            8 =>
            array (
                'id' => 9,
                'prefix' => '£',
                'sign' => 'GBP',
                'suffix' => NULL,
                'country_id' => 11,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            9 =>
            array (
                'id' => 10,
                'prefix' => '$',
                'sign' => 'ARS',
                'suffix' => NULL,
                'country_id' => 8,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            10 =>
            array (
                'id' => 11,
                'prefix' => NULL,
                'sign' => 'AMD',
                'suffix' => NULL,
                'country_id' => 9,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            11 =>
            array (
                'id' => 12,
                'prefix' => 'ƒ',
                'sign' => 'AWG',
                'suffix' => NULL,
                'country_id' => 269,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            12 =>
            array (
                'id' => 13,
                'prefix' => NULL,
                'sign' => 'AZN',
                'suffix' => NULL,
                'country_id' => 16,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            13 =>
            array (
                'id' => 14,
                'prefix' => '$',
                'sign' => 'BSD',
                'suffix' => NULL,
                'country_id' => 24,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            14 =>
            array (
                'id' => 15,
                'prefix' => '.د.ب',
                'sign' => 'BHD',
                'suffix' => NULL,
                'country_id' => 23,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            15 =>
            array (
                'id' => 16,
                'prefix' => '৳',
                'sign' => 'BDT',
                'suffix' => NULL,
                'country_id' => 21,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            16 =>
            array (
                'id' => 17,
                'prefix' => '$',
                'sign' => 'BBD',
                'suffix' => NULL,
                'country_id' => 32,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            17 =>
            array (
                'id' => 18,
                'prefix' => 'Br',
                'sign' => 'BYN',
                'suffix' => NULL,
                'country_id' => 27,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            18 =>
            array (
                'id' => 19,
                'prefix' => 'Br',
                'sign' => 'BYR',
                'suffix' => NULL,
                'country_id' => 27,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            19 =>
            array (
                'id' => 20,
                'prefix' => '$',
                'sign' => 'BZD',
                'suffix' => NULL,
                'country_id' => 28,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            20 =>
            array (
                'id' => 21,
                'prefix' => 'Fr',
                'sign' => 'XOF',
                'suffix' => NULL,
                'country_id' => 19,
                'created_at' => '2018-02-01 10:33:27',
                'updated_at' => '2018-02-01 10:33:27',
            ),
            21 =>
            array (
                'id' => 22,
                'prefix' => '$',
                'sign' => 'BMD',
                'suffix' => NULL,
                'country_id' => 29,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            22 =>
            array (
                'id' => 23,
                'prefix' => 'Nu.',
                'sign' => 'BTN',
                'suffix' => NULL,
                'country_id' => 34,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            23 =>
            array (
                'id' => 24,
                'prefix' => '₹',
                'sign' => 'INR',
                'suffix' => NULL,
                'country_id' => 34,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            24 =>
            array (
                'id' => 25,
                'prefix' => 'Bs.',
                'sign' => 'BOB',
                'suffix' => NULL,
                'country_id' => 34,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            25 =>
            array (
                'id' => 26,
                'prefix' => NULL,
                'sign' => 'BAM',
                'suffix' => NULL,
                'country_id' => 25,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            26 =>
            array (
                'id' => 27,
                'prefix' => 'P',
                'sign' => 'BWP',
                'suffix' => NULL,
                'country_id' => 36,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            27 =>
            array (
                'id' => 28,
                'prefix' => 'kr',
                'sign' => 'NOK',
                'suffix' => NULL,
                'country_id' => 35,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            28 =>
            array (
                'id' => 29,
                'prefix' => 'R$',
                'sign' => 'BRL',
                'suffix' => NULL,
                'country_id' => 31,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            29 =>
            array (
                'id' => 30,
                'prefix' => '$',
                'sign' => NULL,
                'suffix' => NULL,
                'country_id' => 231,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            30 =>
            array (
                'id' => 31,
                'prefix' => '$',
                'sign' => 'BND',
                'suffix' => NULL,
                'country_id' => 231,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            31 =>
            array (
                'id' => 32,
                'prefix' => '$',
                'sign' => 'SGD',
                'suffix' => NULL,
                'country_id' => 231,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            32 =>
            array (
                'id' => 33,
                'prefix' => 'лв',
                'sign' => 'BGN',
                'suffix' => NULL,
                'country_id' => 22,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            33 =>
            array (
                'id' => 34,
                'prefix' => 'Fr',
                'sign' => 'BIF',
                'suffix' => NULL,
                'country_id' => 17,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            34 =>
            array (
                'id' => 35,
                'prefix' => '៛',
                'sign' => 'KHR',
                'suffix' => NULL,
                'country_id' => 118,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            35 =>
            array (
                'id' => 36,
                'prefix' => 'Fr',
                'sign' => 'XAF',
                'suffix' => NULL,
                'country_id' => 44,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            36 =>
            array (
                'id' => 37,
                'prefix' => '$',
                'sign' => 'CAD',
                'suffix' => NULL,
                'country_id' => 38,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            37 =>
            array (
                'id' => 38,
                'prefix' => 'Esc',
                'sign' => 'CVE',
                'suffix' => NULL,
                'country_id' => 38,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            38 =>
            array (
                'id' => 39,
                'prefix' => '$',
                'sign' => 'KYD',
                'suffix' => NULL,
                'country_id' => 55,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            39 =>
            array (
                'id' => 40,
                'prefix' => '$',
                'sign' => 'CLP',
                'suffix' => NULL,
                'country_id' => 41,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            40 =>
            array (
                'id' => 41,
                'prefix' => '¥',
                'sign' => 'CNY',
                'suffix' => NULL,
                'country_id' => 42,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            41 =>
            array (
                'id' => 42,
                'prefix' => '$',
                'sign' => 'COP',
                'suffix' => NULL,
                'country_id' => 48,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            42 =>
            array (
                'id' => 43,
                'prefix' => 'Fr',
                'sign' => 'KMF',
                'suffix' => NULL,
                'country_id' => 49,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            43 =>
            array (
                'id' => 44,
                'prefix' => 'Fr',
                'sign' => 'CDF',
                'suffix' => NULL,
                'country_id' => 45,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            44 =>
            array (
                'id' => 45,
                'prefix' => '$',
                'sign' => 'NZD',
                'suffix' => NULL,
                'country_id' => 47,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            45 =>
            array (
                'id' => 46,
                'prefix' => '$',
                'sign' => 'CKD',
                'suffix' => NULL,
                'country_id' => 47,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            46 =>
            array (
                'id' => 47,
                'prefix' => '₡',
                'sign' => 'CRC',
                'suffix' => NULL,
                'country_id' => 51,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            47 =>
            array (
                'id' => 48,
                'prefix' => 'kn',
                'sign' => 'HRK',
                'suffix' => NULL,
                'country_id' => 98,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            48 =>
            array (
                'id' => 49,
                'prefix' => '$',
                'sign' => 'CUC',
                'suffix' => NULL,
                'country_id' => 52,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            49 =>
            array (
                'id' => 50,
                'prefix' => '$',
                'sign' => 'CUP',
                'suffix' => NULL,
                'country_id' => 52,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            50 =>
            array (
                'id' => 51,
                'prefix' => 'ƒ',
                'sign' => 'ANG',
                'suffix' => NULL,
                'country_id' => 53,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            51 =>
            array (
                'id' => 52,
                'prefix' => 'Kč',
                'sign' => 'CZK',
                'suffix' => NULL,
                'country_id' => 56,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            52 =>
            array (
                'id' => 53,
                'prefix' => 'kr',
                'sign' => 'DKK',
                'suffix' => NULL,
                'country_id' => 61,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            53 =>
            array (
                'id' => 54,
                'prefix' => 'Fr',
                'sign' => 'DJF',
                'suffix' => NULL,
                'country_id' => 59,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            54 =>
            array (
                'id' => 55,
                'prefix' => '$',
                'sign' => 'DOP',
                'suffix' => NULL,
                'country_id' => 62,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            55 =>
            array (
                'id' => 56,
                'prefix' => '£',
                'sign' => 'EGP',
                'suffix' => NULL,
                'country_id' => 65,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            56 =>
            array (
                'id' => 57,
                'prefix' => 'Nfk',
                'sign' => 'ERN',
                'suffix' => NULL,
                'country_id' => 66,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            57 =>
            array (
                'id' => 58,
                'prefix' => 'Br',
                'sign' => 'ETB',
                'suffix' => NULL,
                'country_id' => 70,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            58 =>
            array (
                'id' => 59,
                'prefix' => '£',
                'sign' => 'FKP',
                'suffix' => NULL,
                'country_id' => 70,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            59 =>
            array (
                'id' => 60,
                'prefix' => 'kr',
            'sign' => '(none)',
                'suffix' => NULL,
                'country_id' => 75,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            60 =>
            array (
                'id' => 61,
                'prefix' => '$',
                'sign' => 'FJD',
                'suffix' => NULL,
                'country_id' => 72,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            61 =>
            array (
                'id' => 62,
                'prefix' => 'Fr',
                'sign' => 'XPF',
                'suffix' => NULL,
                'country_id' => 185,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            62 =>
            array (
                'id' => 63,
                'prefix' => 'D',
                'sign' => 'GMD',
                'suffix' => NULL,
                'country_id' => 85,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            63 =>
            array (
                'id' => 64,
                'prefix' => 'ლ',
                'sign' => 'GEL',
                'suffix' => NULL,
                'country_id' => 79,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            64 =>
            array (
                'id' => 65,
                'prefix' => '₵',
                'sign' => 'GHS',
                'suffix' => NULL,
                'country_id' => 81,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            65 =>
            array (
                'id' => 66,
                'prefix' => '£',
                'sign' => 'GIP',
                'suffix' => NULL,
                'country_id' => 82,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            66 =>
            array (
                'id' => 67,
                'prefix' => 'Q',
                'sign' => 'GTQ',
                'suffix' => NULL,
                'country_id' => 91,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            67 =>
            array (
                'id' => 68,
                'prefix' => 'Fr',
                'sign' => 'GNF',
                'suffix' => NULL,
                'country_id' => 83,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            68 =>
            array (
                'id' => 69,
                'prefix' => '$',
                'sign' => 'GYD',
                'suffix' => NULL,
                'country_id' => 94,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            69 =>
            array (
                'id' => 70,
                'prefix' => 'G',
                'sign' => 'HTG',
                'suffix' => NULL,
                'country_id' => 99,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            70 =>
            array (
                'id' => 71,
                'prefix' => 'L',
                'sign' => 'HNL',
                'suffix' => NULL,
                'country_id' => 97,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            71 =>
            array (
                'id' => 72,
                'prefix' => '$',
                'sign' => 'HKD',
                'suffix' => NULL,
                'country_id' => 95,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            72 =>
            array (
                'id' => 733,
                'prefix' => 'Ft',
                'sign' => 'HUF',
                'suffix' => NULL,
                'country_id' => 100,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            73 =>
            array (
                'id' => 74,
                'prefix' => 'kr',
                'sign' => 'ISK',
                'suffix' => NULL,
                'country_id' => 108,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            74 =>
            array (
                'id' => 75,
                'prefix' => 'Rp',
                'sign' => 'IDR',
                'suffix' => NULL,
                'country_id' => 101,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            75 =>
            array (
                'id' => 76,
                'prefix' => '﷼',
                'sign' => 'IRR',
                'suffix' => NULL,
                'country_id' => 101,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            76 =>
            array (
                'id' => 77,
                'prefix' => 'ع.د',
                'sign' => 'IQD',
                'suffix' => NULL,
                'country_id' => 107,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            77 =>
            array (
                'id' => 78,
                'prefix' => '£',
                'sign' => 'IMP[G]',
                'suffix' => NULL,
                'country_id' => 102,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            78 =>
            array (
                'id' => 79,
                'prefix' => '₪',
                'sign' => 'ILS',
                'suffix' => NULL,
                'country_id' => 109,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            79 =>
            array (
                'id' => 80,
                'prefix' => '$',
                'sign' => 'JMD',
                'suffix' => NULL,
                'country_id' => 111,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            80 =>
            array (
                'id' => 81,
                'prefix' => '¥',
                'sign' => 'JPY',
                'suffix' => NULL,
                'country_id' => 114,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            81 =>
            array (
                'id' => 82,
                'prefix' => '£',
                'sign' => 'JEP[G]',
                'suffix' => NULL,
                'country_id' => 112,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            82 =>
            array (
                'id' => 83,
                'prefix' => 'د.ا',
                'sign' => 'JOD',
                'suffix' => NULL,
                'country_id' => 113,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            83 =>
            array (
                'id' => 84,
                'prefix' => NULL,
                'sign' => 'KZT',
                'suffix' => NULL,
                'country_id' => 115,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            84 =>
            array (
                'id' => 85,
                'prefix' => 'Sh',
                'sign' => 'KES',
                'suffix' => NULL,
                'country_id' => 116,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            85 =>
            array (
                'id' => 86,
                'prefix' => 'د.ك',
                'sign' => 'KWD',
                'suffix' => NULL,
                'country_id' => 123,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            86 =>
            array (
                'id' => 87,
                'prefix' => 'с',
                'sign' => 'KGS',
                'suffix' => NULL,
                'country_id' => 117,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            87 =>
            array (
                'id' => 88,
                'prefix' => '₭',
                'sign' => 'LAK',
                'suffix' => NULL,
                'country_id' => 117,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            88 =>
            array (
                'id' => 89,
                'prefix' => 'ل.ل',
                'sign' => 'LBP',
                'suffix' => NULL,
                'country_id' => 125,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            89 =>
            array (
                'id' => 90,
                'prefix' => 'L',
                'sign' => 'LSL',
                'suffix' => NULL,
                'country_id' => 131,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            90 =>
            array (
                'id' => 91,
                'prefix' => 'R',
                'sign' => 'ZAR',
                'suffix' => NULL,
                'country_id' => 131,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            91 =>
            array (
                'id' => 92,
                'prefix' => '$',
                'sign' => 'LRD',
                'suffix' => NULL,
                'country_id' => 126,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            92 =>
            array (
                'id' => 93,
                'prefix' => 'ل.د',
                'sign' => 'LYD',
                'suffix' => NULL,
                'country_id' => 127,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            93 =>
            array (
                'id' => 94,
                'prefix' => 'Fr',
                'sign' => 'CHF',
                'suffix' => NULL,
                'country_id' => 129,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            94 =>
            array (
                'id' => 95,
                'prefix' => 'P',
                'sign' => 'MOP',
                'suffix' => NULL,
                'country_id' => 133,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            95 =>
            array (
                'id' => 96,
                'prefix' => 'ден',
                'sign' => 'MKD',
                'suffix' => NULL,
                'country_id' => 133,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            96 =>
            array (
                'id' => 97,
                'prefix' => 'Ar',
                'sign' => 'MGA',
                'suffix' => NULL,
                'country_id' => 140,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            97 =>
            array (
                'id' => 98,
                'prefix' => 'MK',
                'sign' => 'MWK',
                'suffix' => NULL,
                'country_id' => 156,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            98 =>
            array (
                'id' => 99,
                'prefix' => 'RM',
                'sign' => 'MYR',
                'suffix' => NULL,
                'country_id' => 157,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            99 =>
            array (
                'id' => 100,
                'prefix' => '.ރ',
                'sign' => 'MVR',
                'suffix' => NULL,
                'country_id' => 141,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            100 =>
            array (
                'id' => 101,
                'prefix' => 'UM',
                'sign' => 'MRO',
                'suffix' => NULL,
                'country_id' => 152,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            101 =>
            array (
                'id' => 102,
                'prefix' => '₨',
                'sign' => 'MUR',
                'suffix' => NULL,
                'country_id' => 155,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            102 =>
            array (
                'id' => 103,
                'prefix' => '$',
                'sign' => 'MXN',
                'suffix' => NULL,
                'country_id' => 142,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            103 =>
            array (
                'id' => 104,
                'prefix' => 'L',
                'sign' => 'MDL',
                'suffix' => NULL,
                'country_id' => 142,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            104 =>
            array (
                'id' => 105,
                'prefix' => '₮',
                'sign' => 'MNT',
                'suffix' => NULL,
                'country_id' => 149,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            105 =>
            array (
                'id' => 106,
                'prefix' => 'د.م.',
                'sign' => 'MAD',
                'suffix' => NULL,
                'country_id' => 137,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            106 =>
            array (
                'id' => 107,
                'prefix' => 'MT',
                'sign' => 'MZN',
                'suffix' => NULL,
                'country_id' => 151,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            107 =>
            array (
                'id' => 108,
                'prefix' => 'Ks',
                'sign' => 'MMK',
                'suffix' => NULL,
                'country_id' => 147,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            108 =>
            array (
                'id' => 109,
                'prefix' => '$',
                'sign' => 'NAD',
                'suffix' => NULL,
                'country_id' => 159,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            109 =>
            array (
                'id' => 110,
                'prefix' => '₨',
                'sign' => 'NPR',
                'suffix' => NULL,
                'country_id' => 168,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            110 =>
            array (
                'id' => 111,
                'prefix' => 'C$',
                'sign' => 'NIO',
                'suffix' => NULL,
                'country_id' => 164,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            111 =>
            array (
                'id' => 112,
                'prefix' => '₦',
                'sign' => 'NGN',
                'suffix' => NULL,
                'country_id' => 163,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            112 =>
            array (
                'id' => 113,
                'prefix' => '₩',
                'sign' => 'KPW',
                'suffix' => NULL,
                'country_id' => 162,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            113 =>
            array (
                'id' => 114,
                'prefix' => 'ر.ع.',
                'sign' => 'OMR',
                'suffix' => NULL,
                'country_id' => 171,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            114 =>
            array (
                'id' => 115,
                'prefix' => '₨',
                'sign' => 'PKR',
                'suffix' => NULL,
                'country_id' => 172,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            115 =>
            array (
                'id' => 116,
                'prefix' => 'B/.',
                'sign' => 'PAB',
                'suffix' => NULL,
                'country_id' => 173,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            116 =>
            array (
                'id' => 117,
                'prefix' => 'K',
                'sign' => 'PGK',
                'suffix' => NULL,
                'country_id' => 178,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            117 =>
            array (
                'id' => 118,
                'prefix' => '₲',
                'sign' => 'PYG',
                'suffix' => NULL,
                'country_id' => 183,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            118 =>
            array (
                'id' => 119,
                'prefix' => 'S/.',
                'sign' => 'PEN',
                'suffix' => NULL,
                'country_id' => 175,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            119 =>
            array (
                'id' => 120,
                'prefix' => '₱',
                'sign' => 'PHP',
                'suffix' => NULL,
                'country_id' => 176,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            120 =>
            array (
                'id' => 121,
                'prefix' => 'zł',
                'sign' => 'PLN',
                'suffix' => NULL,
                'country_id' => 179,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            121 =>
            array (
                'id' => 122,
                'prefix' => 'ر.ق',
                'sign' => 'QAR',
                'suffix' => NULL,
                'country_id' => 186,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            122 =>
            array (
                'id' => 123,
                'prefix' => 'lei',
                'sign' => 'RON',
                'suffix' => NULL,
                'country_id' => 188,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            123 =>
            array (
                'id' => 124,
                'prefix' => '₽',
                'sign' => 'RUB',
                'suffix' => NULL,
                'country_id' => 188,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            124 =>
            array (
                'id' => 125,
                'prefix' => 'Fr',
                'sign' => 'RWF',
                'suffix' => NULL,
                'country_id' => 190,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            125 =>
            array (
                'id' => 126,
                'prefix' => '£',
                'sign' => 'SHP',
                'suffix' => NULL,
                'country_id' => 26,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            126 =>
            array (
                'id' => 127,
                'prefix' => 'T',
                'sign' => 'WST',
                'suffix' => NULL,
                'country_id' => 10,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            127 =>
            array (
                'id' => 128,
                'prefix' => 'Db',
                'sign' => 'STD',
                'suffix' => NULL,
                'country_id' => 205,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            128 =>
            array (
                'id' => 129,
                'prefix' => 'ر.س',
                'sign' => 'SAR',
                'suffix' => NULL,
                'country_id' => 191,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            129 =>
            array (
                'id' => 130,
                'prefix' => 'дин.',
                'sign' => 'RSD',
                'suffix' => NULL,
                'country_id' => 203,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            130 =>
            array (
                'id' => 131,
                'prefix' => '₨',
                'sign' => 'SCR',
                'suffix' => NULL,
                'country_id' => 212,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            131 =>
            array (
                'id' => 132,
                'prefix' => 'Le',
                'sign' => 'SLL',
                'suffix' => NULL,
                'country_id' => 198,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            132 =>
            array (
                'id' => 133,
                'prefix' => '$',
                'sign' => 'SBD',
                'suffix' => NULL,
                'country_id' => 197,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            133 =>
            array (
                'id' => 134,
                'prefix' => 'Sh',
                'sign' => 'SOS',
                'suffix' => NULL,
                'country_id' => 201,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            134 =>
            array (
                'id' => 135,
                'prefix' => '₩',
                'sign' => 'KRW',
                'suffix' => NULL,
                'country_id' => 245,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            135 =>
            array (
                'id' => 136,
                'prefix' => '£',
                'sign' => 'SSP',
                'suffix' => NULL,
                'country_id' => 204,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            136 =>
            array (
                'id' => 137,
                'prefix' => 'Rs',
                'sign' => 'LKR',
                'suffix' => NULL,
                'country_id' => 130,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            137 =>
            array (
                'id' => 138,
                'prefix' => 'ج.س.',
                'sign' => 'SDG',
                'suffix' => NULL,
                'country_id' => 192,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            138 =>
            array (
                'id' => 139,
                'prefix' => '$',
                'sign' => 'SRD',
                'suffix' => NULL,
                'country_id' => 206,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            139 =>
            array (
                'id' => 140,
                'prefix' => 'L',
                'sign' => 'SZL',
                'suffix' => NULL,
                'country_id' => 210,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            140 =>
            array (
                'id' => 141,
                'prefix' => 'kr',
                'sign' => 'SEK',
                'suffix' => NULL,
                'country_id' => 209,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            141 =>
            array (
                'id' => 142,
                'prefix' => '£',
                'sign' => 'SYP',
                'suffix' => NULL,
                'country_id' => 40,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            142 =>
            array (
                'id' => 143,
                'prefix' => '$',
                'sign' => 'TWD',
                'suffix' => NULL,
                'country_id' => 227,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            143 =>
            array (
                'id' => 144,
                'prefix' => 'ЅМ',
                'sign' => 'TJS',
                'suffix' => NULL,
                'country_id' => 218,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            144 =>
            array (
                'id' => 145,
                'prefix' => 'Sh',
                'sign' => 'TZS',
                'suffix' => NULL,
                'country_id' => 218,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            145 =>
            array (
                'id' => 146,
                'prefix' => '฿',
                'sign' => 'THB',
                'suffix' => NULL,
                'country_id' => 217,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            146 =>
            array (
                'id' => 147,
                'prefix' => 'T$',
                'sign' => 'TOP',
                'suffix' => NULL,
                'country_id' => 222,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            147 =>
            array (
                'id' => 148,
                'prefix' => '$',
                'sign' => 'TTD',
                'suffix' => NULL,
                'country_id' => 223,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            148 =>
            array (
                'id' => 149,
                'prefix' => 'د.ت',
                'sign' => 'TND',
                'suffix' => NULL,
                'country_id' => 224,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            149 =>
            array (
                'id' => 150,
                'prefix' => NULL,
                'sign' => 'TRY',
                'suffix' => NULL,
                'country_id' => 225,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            150 =>
            array (
                'id' => 151,
                'prefix' => 'm',
                'sign' => 'TMT',
                'suffix' => NULL,
                'country_id' => 220,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            151 =>
            array (
                'id' => 152,
                'prefix' => '$',
                'sign' => 'TVD[G]',
                'suffix' => NULL,
                'country_id' => 226,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            152 =>
            array (
                'id' => 153,
                'prefix' => 'Sh',
                'sign' => 'UGX',
                'suffix' => NULL,
                'country_id' => 229,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            153 =>
            array (
                'id' => 154,
                'prefix' => '₴',
                'sign' => 'UAH',
                'suffix' => NULL,
                'country_id' => 230,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            154 =>
            array (
                'id' => 155,
                'prefix' => 'د.إ',
                'sign' => 'AED',
                'suffix' => NULL,
                'country_id' => 7,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            155 =>
            array (
                'id' => 156,
                'prefix' => '$',
                'sign' => 'UYU',
                'suffix' => NULL,
                'country_id' => 232,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            156 =>
            array (
                'id' => 157,
                'prefix' => NULL,
                'sign' => 'UZS',
                'suffix' => NULL,
                'country_id' => 234,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            157 =>
            array (
                'id' => 158,
                'prefix' => 'Vt',
                'sign' => 'VUV',
                'suffix' => NULL,
                'country_id' => 241,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            158 =>
            array (
                'id' => 159,
                'prefix' => 'Bs F',
                'sign' => 'VEF',
                'suffix' => NULL,
                'country_id' => 241,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            159 =>
            array (
                'id' => 160,
                'prefix' => '₫',
                'sign' => 'VND',
                'suffix' => NULL,
                'country_id' => 241,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            160 =>
            array (
                'id' => 161,
                'prefix' => '﷼',
                'sign' => 'YER',
                'suffix' => NULL,
                'country_id' => 244,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
            161 =>
            array (
                'id' => 162,
                'prefix' => 'ZK',
                'sign' => 'ZMW',
                'suffix' => NULL,
                'country_id' => 246,
                'created_at' => '2018-02-01 10:33:28',
                'updated_at' => '2018-02-01 10:33:28',
            ),
        ));


    }
}
