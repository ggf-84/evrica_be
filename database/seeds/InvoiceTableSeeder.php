<?php

use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        \DB::table('invoice')->truncate();

        \DB::table('invoice')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'title' => 'Invoice NO.1',
                    'description' => NULL,
                    'status_id' => 1,
                    'comment' => NULL,
                    'user_id' => 1,
                    'order_id' => 1,
                    'quote_id' => 1,
                    'invoice_no' => '#INV785',
                    'sent_at' => NULL,
                    'paid_at' => NULL,
                    'due_at' => NULL,
                    'counterparty_id' => 1,
                    'company_id' => 1,
                    'template_id' => 1,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            1 =>
                array(
                    'id' => 2,
                    'title' => 'Invoice NO.2',
                    'description' => NULL,
                    'status_id' => 2,
                    'comment' => NULL,
                    'user_id' => 2,
                    'order_id' => 2,
                    'quote_id' => 2,
                    'invoice_no' => '#INV7285',
                    'sent_at' => NULL,
                    'paid_at' => NULL,
                    'due_at' => NULL,
                    'counterparty_id' => 2,
                    'company_id' => 2,
                    'template_id' => 2,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
            2 =>
                array(
                    'id' => 3,
                    'title' => 'Invoice NO.3',
                    'description' => NULL,
                    'status_id' => 3,
                    'comment' => NULL,
                    'user_id' => 3,
                    'order_id' => 3,
                    'quote_id' => 3,
                    'invoice_no' => '#INV17285',
                    'sent_at' => NULL,
                    'paid_at' => NULL,
                    'due_at' => NULL,
                    'counterparty_id' => 3,
                    'company_id' => 3,
                    'template_id' => 3,
                    'created_at' => '2017-06-16 14:30:13',
                    'updated_at' => '2017-06-16 14:30:13',
                ),
        ));
    }
}
