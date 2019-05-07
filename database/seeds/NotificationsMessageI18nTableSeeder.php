<?php

use Illuminate\Database\Seeder;

class NotificationsMessageI18nTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('notification_message_i18n')->truncate();

        \DB::table('notification_message_i18n')->insert(array(
            0 =>
                array(
                    'message_id' => 1,
                    'text' => 'The counteragent #email  has changed the following fields: #old% to #new%',
                    'language_id' => 1,
                ),
            1 =>
                array(
                    'message_id' => 2,
                    'text' => 'The counteragent #old|email was removed from your company!',
                    'language_id' => 1,
                ),
            2 =>
                array(
                    'message_id' => 3,
                    'text' => 'A new counteragent has been added to your company: #new|email',
                    'language_id' => 1,
                ),
            3 =>
                array(
                    'message_id' => 1,
                    'text' => 'У контраагента #email были изменены следуюшие поля: #old% на #new%',
                    'language_id' => 3,
                ),
            4 =>
                array(
                    'message_id' => 2,
                    'text' => 'Контраагент #old|email был удален из вашу компанию!',
                    'language_id' => 3,
                ),
            5 =>
                array(
                    'message_id' => 3,
                    'text' => 'В вашу компанию был добавлен новый контраагент: #new|email',
                    'language_id' => 3,
                ),
            6 =>
                array(
                    'message_id' => 7,
                    'text' => 'Контраагент #email был успешно активирован!',
                    'language_id' => 3,
                ),
            7 =>
                array(
                    'message_id' => 7,
                    'text' => 'The counteragent #email was successfully activated!',
                    'language_id' => 1,
                ),
            8 =>
                array(
                    'message_id' => 8,
                    'text' => 'A new user has been added to your company: #email',
                    'language_id' => 1,
                ),
            9 =>
                array(
                    'message_id' => 8,
                    'text' => 'В вашу компанию был добавлен новый пользователь: #email',
                    'language_id' => 3,
                ),
            10 =>
                array(
                    'message_id' => 10,
                    'text' => 'The order #old|title was renamed to: #new|title',
                    'language_id' => 1,
                ),
            11 =>
                array(
                    'message_id' => 19,
                    'text' => 'Ордер #old|title был переименнован на: $new|title',
                    'language_id' => 3,
                ),

        ));
    }
}
