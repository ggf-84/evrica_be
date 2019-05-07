<?php

use Illuminate\Database\Seeder;

class OfferTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('offer')->truncate();

        \DB::table('offer')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'Offer 1',
                    'status_id' => 1,
                    'currency_id' => 1,
                    'sum' => 200,
                    'responsible' => 4,
                    'post_date' => '2017-06-16',
                    'end_date' => '2017-06-23',
                    'available_all' => 1,
                    'client_id' => 1,
                    'provider_id' => 0,
                    'description' => 'Content',
                    'conditions' => 'Content',
                    'comment' => 'Comment',
                    'company_id' => 3,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                    'order_id' => 0,
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Offer 1',
                    'status_id' => 1,
                    'currency_id' => 1,
                    'sum' => 200,
                    'responsible' => 2,
                    'post_date' => '2017-06-16',
                    'end_date' => '2017-06-23',
                    'available_all' => 1,
                    'client_id' => 1,
                    'provider_id' => 0,
                    'description' => 'Content',
                    'conditions' => 'Content',
                    'comment' => 'Comment',
                    'company_id' => 2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                    'order_id' => 0,
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'Offer No.2',
                    'status_id' => 4,
                    'currency_id' => 1,
                    'sum' => 154,
                    'responsible' => 3,
                    'post_date' => '2017-06-16',
                    'end_date' => '2017-06-23',
                    'available_all' => 1,
                    'client_id' => 1,
                    'provider_id' => 0,
                    'description' => 'Content',
                    'conditions' => 'Content',
                    'comment' => 'Comment',
                    'company_id' => 2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                    'order_id' => 5,
                ),
            3 =>
                array(
                    'id' => 4,
                    'title' => 'Offer No.3',
                    'status_id' => 5,
                    'currency_id' => 1,
                    'sum' => 329,
                    'responsible' => 4,
                    'post_date' => '2017-06-16',
                    'end_date' => '2017-06-23',
                    'available_all' => 1,
                    'client_id' => 1,
                    'provider_id' => 0,
                    'description' => 'Content',
                    'conditions' => 'Content',
                    'comment' => 'Comment',
                    'company_id' => 2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                    'order_id' => 6,
                ),
            4 =>
                array(
                    'id' => 5,
                    'title' => 'Offer No.4',
                    'status_id' => 3,
                    'currency_id' => 1,
                    'sum' => 365,
                    'responsible' => 5,
                    'post_date' => '2017-06-16',
                    'end_date' => '2017-06-23',
                    'available_all' => 1,
                    'client_id' => 1,
                    'provider_id' => 0,
                    'description' => 'Content',
                    'conditions' => 'Content',
                    'comment' => 'Comment',
                    'company_id' => 2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                    'order_id' => 7,
                ),
        ));


    }
}
