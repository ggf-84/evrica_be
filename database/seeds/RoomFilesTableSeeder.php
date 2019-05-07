<?php

use Illuminate\Database\Seeder;

class RoomFilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('room_files')->truncate();

        \DB::table('room_files')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'room_id' => 1,
                    'user_id' => 3,
                    'message_id' => 1,
                    'company_id' => 3,
                    'url' => 'https://d2eeipcrcdle6.cloudfront.net/learn/seo/URLs-page/Anatomy-of-a-URL-cheat-sheet_170316_122433.png?mtime=20170316122435',
                    'extension' => 'png',
                    'size' => '3mb',
                    'thumbnail' => 'https://d2eeipcrcdle6.cloudfront.net/learn/seo/URLs-page/Anatomy-of-a-URL-cheat-sheet_170316_122433.png?mtime=20170316122435',
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            1 =>
                array(
                    'id' => 2,
                    'room_id' => 2,
                    'user_id' => 1,
                    'message_id' => 2,
                    'company_id' => 3,
                    'url' => 'https://www.oclc.org/content/dam/support/ezproxy/documentation/images/starting_point_url.png',
                    'extension' => 'png',
                    'size' => '1kb',
                    'thumbnail' => 'https://d2eeipcrcdle6.cloudfront.net/learn/seo/URLs-page/Anatomy-of-a-URL-cheat-sheet_170316_122433.png?mtime=20170316122435',
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
            2 =>
                array(
                    'id' => 3,
                    'room_id' => 2,
                    'user_id' => 2,
                    'message_id' => 2,
                    'company_id' => 3,
                    'url' => 'https://www.oclc.org/content/dam/support/ezproxy/documentation/images/starting_point_url.png',
                    'extension' => 'png',
                    'size' => '1kb',
                    'thumbnail' => 'https://d2eeipcrcdle6.cloudfront.net/learn/seo/URLs-page/Anatomy-of-a-URL-cheat-sheet_170316_122433.png?mtime=20170316122435',
                    'created_at' => '2018-02-16 00:00:00',
                    'updated_at' => '2018-02-16 00:00:00',
                ),
        ));


    }
}
