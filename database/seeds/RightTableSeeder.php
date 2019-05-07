<?php

use Illuminate\Database\Seeder;

class RightTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('right')->truncate();

        \DB::table('right')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'Create Products',
                'description' => 'Create products rights',
                'code' => 'create_product',
                'module_id' => 1,
                'created_at' => '2017-06-16 14:51:42',
                'updated_at' => '2017-06-17 21:46:54',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'Update Product',
                'description' => 'Update Products right',
                'code' => 'update_product',
                'module_id' => 1,
                'created_at' => '2017-06-16 18:43:48',
                'updated_at' => '2017-06-17 19:48:46',
            ),
            2 =>
            array (
                'id' => 3,
                'title' => 'View Product',
                'description' => 'View Product',
                'code' => 'view_product',
                'module_id' => 1,
                'created_at' => '2017-06-16 17:46:45',
                'updated_at' => '2017-06-17 16:40:46',
            ),
            3 =>
            array (
                'id' => 4,
                'title' => 'Delete Product',
                'description' => 'Delete Product',
                'code' => 'delete_product',
                'module_id' => 1,
                'created_at' => '2017-06-16 17:46:45',
                'updated_at' => '2017-06-17 16:40:46',
            ),
            4 =>
            array (
                'id' => 5,
                'title' => 'Create Invoice',
                'description' => 'Create invoices rights',
                'code' => 'create_invoice',
                'module_id' => 3,
                'created_at' => '2017-06-16 14:51:42',
                'updated_at' => '2017-06-17 21:46:54',
            ),
            5 =>
            array (
                'id' => 6,
                'title' => 'Update Invoice',
                'description' => 'Update invoices right',
                'code' => 'update_invoice',
                'module_id' => 3,
                'created_at' => '2017-06-16 18:43:48',
                'updated_at' => '2017-06-17 19:48:46',
            ),
            6 =>
            array (
                'id' => 7,
                'title' => 'View Invoice',
                'description' => 'View Invoice',
                'code' => 'view_invoice',
                'module_id' => 3,
                'created_at' => '2017-06-16 17:46:45',
                'updated_at' => '2017-06-17 16:40:46',
            ),
            7 =>
            array (
                'id' => 8,
                'title' => 'Delete Invoice',
                'description' => 'Delete invoice',
                'code' => 'delete_invoice',
                'module_id' => 3,
                'created_at' => '2017-06-16 17:46:45',
                'updated_at' => '2017-06-17 16:40:46',
            ),
            8 =>
            array (
                'id' => 9,
                'title' => 'Create Order',
                'description' => 'Create order rights',
                'code' => 'create_order',
                'module_id' => 2,
                'created_at' => '2017-06-16 14:51:42',
                'updated_at' => '2017-06-17 21:46:54',
            ),
            9 =>
            array (
                'id' => 10,
                'title' => 'Update Order',
                'description' => 'Update order',
                'code' => 'update_order',
                'module_id' => 2,
                'created_at' => '2017-06-16 18:43:48',
                'updated_at' => '2017-06-17 19:48:46',
            ),
            10 =>
            array (
                'id' => 11,
                'title' => 'View order',
                'description' => 'View order',
                'code' => 'view_order',
                'module_id' => 2,
                'created_at' => '2017-06-16 17:46:45',
                'updated_at' => '2017-06-17 16:40:46',
            ),
            11 =>
            array (
                'id' => 12,
                'title' => 'Delete Order',
                'description' => 'Delete order',
                'code' => 'delete_order',
                'module_id' => 2,
                'created_at' => '2017-06-16 17:46:45',
                'updated_at' => '2017-06-17 16:40:46',
            ),
        ));


    }
}
