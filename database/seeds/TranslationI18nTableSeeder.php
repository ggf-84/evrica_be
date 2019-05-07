<?php

use Illuminate\Database\Seeder;

class TranslationI18nTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('translation_i18n')->delete();
        
        \DB::table('translation_i18n')->insert(array (
            0 => 
            array (
                'id' => 7,
                'translation_id' => 1,
                'content' => 'бутон',
                'language_id' => 2,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            1 => 
            array (
                'id' => 8,
                'translation_id' => 2,
                'content' => 'карта',
                'language_id' => 2,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            2 => 
            array (
                'id' => 9,
                'translation_id' => 3,
                'content' => 'бдительный',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            3 => 
            array (
                'id' => 10,
                'translation_id' => 2,
                'content' => 'карта',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            4 => 
            array (
                'id' => 11,
                'translation_id' => 1,
                'content' => 'кнопка',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            5 => 
            array (
                'id' => 12,
                'translation_id' => 3,
                'content' => 'тревога',
                'language_id' => 2,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            6 => 
            array (
                'id' => 13,
                'translation_id' => 4,
                'content' => 'отправил сообщение',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            7 => 
            array (
                'id' => 14,
                'translation_id' => 5,
                'content' => 'отправил сообщение в комнате',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            8 => 
            array (
                'id' => 15,
                'translation_id' => 6,
                'content' => 'пишет сообщение',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            9 => 
            array (
                'id' => 16,
                'translation_id' => 7,
                'content' => 'Приглашение необходимо, чтобы присоединиться к комнате',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            10 => 
            array (
                'id' => 17,
                'translation_id' => 8,
                'content' => 'Не могу присоединиться к комнате, потому что вы оставили комнату',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            11 => 
            array (
                'id' => 18,
                'translation_id' => 9,
                'content' => 'Невозможно выполнить действие, потому что вам понадобится приглашение присоединиться к комнате',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            12 => 
            array (
                'id' => 19,
                'translation_id' => 10,
                'content' => 'Не удается выполнить действие, потому что мы получили недопустимые данные, попробуйте перезагрузить страницу',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            13 => 
            array (
                'id' => 20,
                'translation_id' => 11,
                'content' => 'Невозможно выполнить действие, потому что вы не принимали приглашение',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            14 => 
            array (
                'id' => 21,
                'translation_id' => 12,
                'content' => 'Пожалуйста, примите приглашение присоединиться к комнате',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            15 => 
            array (
                'id' => 22,
                'translation_id' => 13,
                'content' => 'подключился в комнату',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            16 => 
            array (
                'id' => 23,
                'translation_id' => 14,
                'content' => 'подключился',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            17 => 
            array (
                'id' => 24,
                'translation_id' => 15,
                'content' => 'успешно создан',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            18 => 
            array (
                'id' => 25,
                'translation_id' => 16,
                'content' => 'пригласил вас в комнату',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            19 => 
            array (
                'id' => 26,
                'translation_id' => 17,
                'content' => 'не было создано успешно, поскольку статус недействителен',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            20 => 
            array (
                'id' => 27,
                'translation_id' => 18,
                'content' => 'не было создано успешно, потому что комната уже существует',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            21 => 
            array (
                'id' => 28,
                'translation_id' => 19,
                'content' => 'Вы успешно покинули комнату',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            22 => 
            array (
                'id' => 29,
                'translation_id' => 20,
                'content' => 'Вы не успели покинуть комнату',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            23 => 
            array (
                'id' => 30,
                'translation_id' => 21,
                'content' => 'Вы уже покинули комнату',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            24 => 
            array (
                'id' => 31,
                'translation_id' => 22,
                'content' => 'Вы успешно удалили комнату',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            25 => 
            array (
                'id' => 32,
                'translation_id' => 23,
                'content' => 'Вы не удалили комнату',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            26 => 
            array (
                'id' => 33,
                'translation_id' => 24,
                'content' => 'отправил вам сообщение',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            27 => 
            array (
                'id' => 34,
                'translation_id' => 25,
                'content' => 'В настоящее время мы не в сети',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            28 => 
            array (
                'id' => 35,
                'translation_id' => 26,
                'content' => 'В настоящее время мы в сети',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            29 => 
            array (
                'id' => 36,
                'translation_id' => 27,
                'content' => 'Введите сообщение здесь',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            30 => 
            array (
                'id' => 37,
                'translation_id' => 28,
                'content' => 'Ваше имя
',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            31 => 
            array (
                'id' => 38,
                'translation_id' => 29,
                'content' => 'Ваш адрес электронной почты
',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            32 => 
            array (
                'id' => 39,
                'translation_id' => 30,
                'content' => 'Ваш вопрос',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            33 => 
            array (
                'id' => 40,
                'translation_id' => 31,
                'content' => 'Мы в настоящее время не в сети, напишите нам по электронной почте',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            34 => 
            array (
                'id' => 41,
                'translation_id' => 32,
                'content' => 'Вопрос успешно отправлен',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            35 => 
            array (
                'id' => 42,
                'translation_id' => 33,
                'content' => 'Это поле обязательно к заполнению
',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            36 => 
            array (
                'id' => 43,
                'translation_id' => 34,
                'content' => 'Email не является допустимым
',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            37 => 
            array (
                'id' => 44,
                'translation_id' => 35,
                'content' => 'Здравствуйте, у вас есть вопросы?',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            38 => 
            array (
                'id' => 45,
                'translation_id' => 36,
                'content' => 'редактированный',
                'language_id' => 3,
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
        ));
        
        
    }
}