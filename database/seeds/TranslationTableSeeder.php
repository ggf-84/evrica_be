<?php

use Illuminate\Database\Seeder;
use App\Models\Language;

class TranslationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('translation')->delete();

        \DB::table('translation')->insert(array(
            0 =>
                array(
                'id' => 1,
                'code' => 'button',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            1 =>
                array(
                'id' => 2,
                'code' => 'map',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            2 =>
                array(
                'id' => 3,
                'code' => 'alert',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            3 =>
                array(
                'id' => 4,
                'code' => 'sent a message',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            4 =>
                array(
                'id' => 5,
                'code' => 'sent a message in room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            5 =>
                array(
                'id' => 6,
                'code' => 'is typing a message',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            6 =>
                array(
                'id' => 7,
                'code' => 'An invite is needed to join room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            7 =>
                array(
                'id' => 8,
                'code' => 'Can\'t join room because you\'ve left room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            8 =>
                array(
                'id' => 9,
                'code' => 'Can\'t perform action because , you will need an invite to join room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            9 =>
                array(
                'id' => 10,
                'code' => 'Can\'t perform action because , we received invalid data , try reloading the page',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            10 =>
                array(
                'id' => 11,
                'code' => 'Can\'t perform action because , you didn\'t accept invite',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            11 =>
                array(
                'id' => 12,
                'code' => 'Please , accept invitation to join room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            12 =>
                array(
                'id' => 13,
                'code' => 'has connected in room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            13 =>
                array(
                'id' => 14,
                'code' => 'has connected',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            14 =>
                array(
                'id' => 15,
                'code' => 'created successfully',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            15 =>
                array(
                'id' => 16,
                'code' => 'invited you to room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            16 =>
                array(
                'id' => 17,
                'code' => 'wasn\'t created successfully , because status is not valid',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            17 =>
                array(
                'id' => 18,
                'code' => 'wasn\'t created successfully , because room already exists',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            18 =>
                array(
                'id' => 19,
                'code' => 'You have successfully left room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            19 =>
                array(
                'id' => 20,
                'code' => 'You have not successfully left room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            20 =>
                array(
                'id' => 21,
                'code' => 'You already left room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            21 =>
                array(
                'id' => 22,
                'code' => 'You have successfully deleted room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            22 =>
                array(
                'id' => 23,
                'code' => 'You have not successfully deleted room',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            23 =>
                array(
                'id' => 24,
                'code' => 'sent you a message',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            24 =>
                array(
                'id' => 25,
                'code' => 'We are currently offline',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            25 =>
                array(
                'id' => 26,
                'code' => 'We are currently online',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            26 =>
                array(
                'id' => 27,
                'code' => 'Type a message here',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            27 =>
                array(
                'id' => 28,
                'code' => 'Your name',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            28 =>
                array(
                'id' => 29,
                'code' => 'Your email',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            29 =>
                array(
                'id' => 30,
                'code' => 'Your question',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            30 =>
                array(
                'id' => 31,
                'code' => 'We are currently offline , write us an email',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            31 =>
                array(
                'id' => 32,
                'code' => 'Question was successfully sent',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            32 =>
                array(
                'id' => 33,
                'code' => 'This field is required',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            33 =>
                array(
                'id' => 34,
                'code' => 'Email is not valid',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            34 =>
                array(
                'id' => 35,
                'code' => 'Hello , do you have any questions ?',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
            35 =>
                array(
                'id' => 36,
                'code' => 'Edited',
                'created_at' => '2017-11-15 10:05:36',
                'updated_at' => '2017-11-15 15:30:05',
            ),
        ));

        // store translations for pm
        $this->storePMTranslate();

    }

    private function storePMTranslate()
    {
           // get languages
        $langs = Language::all()->keyBy('code');
        
           // values
        $values = [
            [
                'code' => 'personal_boards',
                'values' => [
                    'en' => 'Personal Boards',
                    'ru' => 'Персональные доски'
                ]
            ], [
                'code' => 'members',
                'values' => [
                    'en' => 'Members',
                    'ru' => 'Участники'
                ]
            ],
            [
                'code' => 'add_new_team',
                'values' => [
                    'en' => 'Add new team',
                    'ru' => 'Создать новую команду'
                ]
            ],
            [
                'code' => 'add_new_board',
                'values' => [
                    'en' => 'Add new board',
                    'ru' => 'Создать новую доску'
                ]
            ],
            [
                'code' => 'add_new_task',
                'values' => [
                    'en' => 'Add new task',
                    'ru' => 'Добавить задачу'
                ]
            ],
            [
                'code' => 'add_new_list',
                'values' => [
                    'en' => 'Add new list',
                    'ru' => 'Добавить список'
                ]
            ],
            [
                'code' => 'insert_board_title',
                'values' => [
                    'en' => 'Insert new board title',
                    'ru' => 'Добавить заголовок доски'
                ]
            ],
            [
                'code' => 'search_users',
                'values' => [
                    'en' => 'Search users',
                    'ru' => 'Поиск пользователей'
                ]
            ], [
                'code' => 'add_users_to_team',
                'values' => [
                    'en' => 'Add users to team',
                    'ru' => 'Пригласите участников в вашу команду'
                ]
            ],
            [
                'code' => 'search',
                'values' => ['en' => 'Search', 'ru' => 'Поиск']
            ],
            [
                'code' => 'new_team',
                'values' => [
                    'en' => 'New Team',
                    'ru' => 'Новая команда'
                ]
            ],
            [
                'code' => 'team_title',
                'values' => [
                    'en' => 'Team title',
                    'ru' => 'Название команды'
                ]
            ],
            [
                'code' => 'new_board',
                'values' => [
                    'en' => 'New Board',
                    'ru' => 'Новая доска'
                ]
            ],
            [
                'code' => 'board_title',
                'values' => [
                    'en' => 'Board title',
                    'ru' => 'Название доски'
                ]
            ],
            [
                'code' => 'add_task',
                'values' => [
                    'en' => 'Add a task',
                    'ru' => 'Добавить задачу'
                ]
            ],
            [
                'code' => 'back',
                'values' => [
                    'en' => 'Back',
                    'ru' => 'Назад'
                ]
            ],
            [
                'code' => 'new_task',
                'values' => [
                    'en' => 'New task',
                    'ru' => 'Новая задача'
                ]
            ],
            [
                'code' => 'task_title',
                'values' => [
                    'en' => 'Task title',
                    'ru' => 'Название задачи'
                ]
            ],
            [
                'code' => 'add_list',
                'values' => [
                    'en' => 'Add a list',
                    'ru' => 'Добавить список'
                ]
            ],
            [
                'code' => 'new_list',
                'values' => [
                    'en' => 'New list',
                    'ru' => 'Новый список'
                ]
            ],
            [
                'code' => 'list_title',
                'values' => [
                    'en' => 'List title',
                    'ru' => 'Название списка'
                ]
            ],
            [
                'code' => 'add',
                'values' => [
                    'en' => 'Add',
                    'ru' => 'Добавить'
                ]
            ],

            [
                'code' => 'in_list',
                'values' => [
                    'en' => 'In list',
                    'ru' => 'В списке'
                ]
            ],
            [
                'code' => 'description',
                'values' => [
                    'en' => 'Description',
                    'ru' => 'Описание'
                ]
            ],
            [
                'code' => 'edit',
                'values' => [
                    'en' => 'Edit',
                    'ru' => 'Изменить'
                ]
            ],
            [
                'code' => 'attachements',
                'values' => [
                    'en' => 'Attachements',
                    'ru' => 'Вложения'
                ]
            ],
            [
                'code' => 'add_comment',
                'values' => [
                    'en' => 'Add a comment',
                    'ru' => 'Добавить кометарии'
                ]
            ],
            [
                'code' => 'write_comment',
                'values' => [
                    'en' => 'Write comment',
                    'ru' => 'Написать комментарии'
                ]
            ],
            [
                'code' => 'save',
                'values' => [
                    'en' => 'Save',
                    'ru' => 'Cохранить'
                ]
            ],
            [
                'code' => 'comments',
                'values' => [
                    'en' => 'Comments',
                    'ru' => 'Комментарии'
                ]
            ],
            [
                'code' => 'labels',
                'values' => [
                    'en' => 'Labels',
                    'ru' => 'Метки'
                ]
            ],
            [
                'code' => 'checklist',
                'values' => [
                    'en' => 'Checklist',
                    'ru' => 'Чек-лист'
                ]
            ],
            [
                'code' => 'due_date',
                'values' => [
                    'en' => 'Due date',
                    'ru' => 'Срок'
                ]
            ],
            [
                'code' => 'attachement',
                'values' => [
                    'en' => 'Attachement',
                    'ru' => 'Вложение'
                ]
            ],
            [
                'code' => 'search_members',
                'values' => [
                    'en' => 'Search members',
                    'ru' => 'Поиск пользователей'
                ]
            ],
            [
                'code' => 'selected_members',
                'values' => [
                    'en' => 'Selected members',
                    'ru' => 'Выбранные пользователи'
                ]
            ],
            [
                'code' => 'title',
                'values' => [
                    'en' => 'Title',
                    'ru' => 'Название'
                ]
            ],
            [
                'code' => 'files_with_a_size_less_than',
                'values' => [
                    'en' => 'file with a size less than',
                    'ru' => 'файлы размера менише'
                ]
            ],
            [
                'code' => 'drop_file_or_click',
                'values' => [
                    'en' => 'Drop file or click',
                    'ru' => 'Перетащите файлы сюда или нажмите сюда'
                ]
            ],
            [
                'code' => 'added',
                'values' => [
                    'en' => 'Added',
                    'ru' => 'Добавлено'
                ]
            ],
            [
                'code' => 'delete',
                'values' => [
                    'en' => 'Delete',
                    'ru' => 'Удалить'
                ]
            ],
            [
                'code' => 'add_an_item',
                'values' => [
                    'en' => 'Add an item',
                    'ru' => 'Добавить элемент'
                ]
            ],

            [
                'code' => 'delete',
                'values' => [
                    'en' => 'Delete',
                    'ru' => 'Удалить'
                ]
            ],
            [
                'code' => 'update',
                'values' => [
                    'en' => 'Update',
                    'ru' => 'Обновить'
                ]
            ],
            [
                'code' => 'are_you_sure_to_delete_this',
                'values' => [
                    'en' => 'Are you sure to delete this',
                    'ru' => 'Вы уверены что хотите удалить'
                ]
            ],
            [
                'code' => 'confirm',
                'values' => [
                    'en' => 'Confirm',
                    'ru' => 'Подтвердить'
                ]
            ],
            [
                'code' => 'cancel',
                'values' => [
                    'en' => 'Cancel',
                    'ru' => 'Отменить'
                ]
            ],
            [
                'code' => 'remove_task',
                'values' => [
                    'en' => 'Remove task',
                    'ru' => 'Удалить задачу'
                ]
            ],
            [
                'code' => 'yes',
                'values' => [
                    'en' => 'Yes',
                    'ru' => 'Да'
                ]
            ],
            [
                'code' => 'no',
                'values' => [
                    'en' => 'No',
                    'ru' => 'Нет'
                ]
            ],
            [
                'code' => 'remove_task',
                'values' => [
                    'en' => 'Remove task',
                    'ru' => 'Удалить задачу'
                ]
            ],
            [
                'code' => 'remove_list',
                'values'=>[
                    'en' => 'Remove list',
                    'ru' => 'Удалить список'
                ]
            ],
            [
                'code' => 'remove_board',
                'values' => [
                    'en' => 'Remove board',
                    'ru' => 'Удалить доску'
                ]
            ]

        ];


           // insert each item as translation content
        foreach ($values as $item) {

            $id = \DB::table('translation')->insertGetId([
                'code' => $item['code']
            ]);

            foreach ($item['values'] as $code => $content) {
                \DB::table('translation_i18n')->insert(
                    [
                        'translation_id' => $id,
                        'language_id' => isset($langs[$code]) ? $langs[$code]->id : 0,
                        'content' => $content
                    ]
                );
            }
        }

    }
}