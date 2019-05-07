<?php

use Illuminate\Database\Seeder;

class NotificationsTypesI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('notification_types_i18n')->truncate();

        \DB::table('notification_types_i18n')->insert(array(
            0 =>
                array(
                    'title' => 'Counterparty Notification',
                    'type_id' => 1,
                    'language_id' => 1,
                ),
            1 =>
                array(
                    'title' => 'Уведомления o контрагенте',
                    'type_id' => 1,
                    'language_id' => 3,
                ),
            2 =>
                array(
                    'title' => 'Quote Notification',
                    'type_id' => 2,
                    'language_id' => 1,
                ),
            3 =>
                array(
                    'title' => 'Уведомления o заказе',
                    'type_id' => 2,
                    'language_id' => 3,
                ),
            4 =>
                array(
                    'title' => 'Department Notification',
                    'type_id' => 3,
                    'language_id' => 1,
                ),
            5 =>
                array(
                    'title' => 'Уведомления o отделе',
                    'type_id' => 3,
                    'language_id' => 3,
                ),
            6 =>
                array(
                    'title' => 'Rate Notification',
                    'type_id' => 6,
                    'language_id' => 1,
                ),
            7 =>
                array(
                    'title' => 'Уведомления o ставке',
                    'type_id' => 6,
                    'language_id' => 3,
                ),
            8 =>
                array(
                    'title' => 'Region Notification',
                    'type_id' => 4,
                    'language_id' => 1,
                ),
            9 =>
                array(
                    'title' => 'Уведомления o регионе',
                    'type_id' => 7,
                    'language_id' => 3,
                ),
            10 =>
                array(
                    'title' => 'Lead Notification',
                    'type_id' => 8,
                    'language_id' => 1,
                ),
            11 =>
                array(
                    'title' => 'Уведомления o лидов',
                    'type_id' => 8,
                    'language_id' => 3,
                ),
            12 =>
                array(
                    'title' => 'Country Notification',
                    'type_id' => 9,
                    'language_id' => 1,
                ),
            13 =>
                array(
                    'title' => 'Уведомления o странах',
                    'type_id' => 9,
                    'language_id' => 3,
                ),
            14 =>
                array(
                    'title' => 'Users Notification',
                    'type_id' => 10,
                    'language_id' => 1,
                ),
            15 =>
                array(
                    'title' => 'Уведомления o пользователей',
                    'type_id' => 10,
                    'language_id' => 3,
                ),

        ));
    }
}
