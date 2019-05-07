<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();

        \DB::table('users')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'firstname' => 'Test',
                    'lastname' => '3',
                    'email' => 'test3@mail.com',
                    'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
                    'status' => 1,
                    'confirmed' => 1,
                    'locked' => 0,
                    'is_admin' => 1,
                    'company_id' => 1,
                    'created_at' => '2017-06-16 10:04:46',
                    'updated_at' => '2017-06-16 10:05:27',
                ),
            1 =>
                array(
                    'id' => 2,
                    'firstname' => 'Test',
                    'lastname' => '2',
                    'email' => 'test2@mail.com',
                    'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
                    'status' => 1,
                    'confirmed' => 1,
                    'locked' => 0,
                    'is_admin' => 0,
                    'company_id' => 2,
                    'created_at' => '2017-06-16 10:04:46',
                    'updated_at' => '2017-06-16 11:27:25',
                ),
            2 =>
                array(
                    'id' => 3,
                    'firstname' => 'Test',
                    'lastname' => 'test',
                    'email' => 'test@mail.com',
                    'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
                    'status' => 1,
                    'confirmed' => 1,
                    'locked' => 0,
                    'company_id' => 3,
                    'is_admin' => 1,
                    'created_at' => '2017-06-16 10:04:46',
                    'updated_at' => '2017-06-16 11:27:40',
                ),
            3 =>
                array(
                    'id' => 4,
                    'firstname' => 'user_test1',
                    'lastname' => 'user_test1',
                    'email' => 'usertest@mail.com',
                    'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
                    'status' => 1,
                    'confirmed' => 1,
                    'locked' => 0,
                    'company_id' => 3,
                    'is_admin' => 0,
                    'created_at' => '2017-06-16 11:37:41',
                    'updated_at' => '2017-06-16 11:37:41',
                ),
            4 =>
                array(
                    'id' => 5,
                    'firstname' => 'user_test2',
                    'lastname' => 'user_test2',
                    'email' => 'usertest2@mail.com',
                    'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
                    'status' => 1,
                    'confirmed' => 1,
                    'locked' => 0,
                    'company_id' => 2,
                    'is_admin' => 0,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            5 =>
                array(
                    'id' => 6,
                    'firstname' => 'Test',
                    'lastname' => 'Tet2',
                    'email' => 'test1@mail.com',
                    'password' => '$2y$10$/dVC2vsIedTa/q2C5yEdIeLLlCEpqNvRBfGgdzQX2k8fvj2V6m/ji',
                    'status' => 0,
                    'confirmed' => 0,
                    'locked' => 0,
                    'is_admin' => 0,
                    'company_id' => 1,
                    'created_at' => '2017-07-04 10:14:22',
                    'updated_at' => '2017-07-04 10:14:22',
                ),
            6 =>
                array(
                    'id' => 7,
                    'firstname' => 'user_test7',
                    'lastname' => 'user_test7',
                    'email' => 'usertest7@mail.com',
                    'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
                    'status' => 1,
                    'confirmed' => 1,
                    'is_admin' => 0,
                    'locked' => 0,
                    'company_id' => 4,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            7 =>
                array(
                    'id' => 8,
                    'firstname' => 'user_test8',
                    'lastname' => 'user_test8',
                    'email' => 'usertest8@mail.com',
                    'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
                    'status' => 1,
                    'confirmed' => 1,
                    'is_admin' => 0,
                    'locked' => 0,
                    'company_id' => 5,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
            8 =>
                array(
                    'id' => 9,
                    'firstname' => 'user_test9',
                    'lastname' => 'user_test9',
                    'email' => 'usertest9@mail.com',
                    'password' => '$2y$10$yaFckTeJhMsSYEQO9QCgd.g.nv/6i9rZzDuAEKt2Xb9eQavNGAoK.',
                    'status' => 1,
                    'confirmed' => 1,
                    'locked' => 0,
                    'is_admin' => 0,
                    'company_id' => 3,
                    'created_at' => '2017-06-16 00:00:00',
                    'updated_at' => '2017-06-16 00:00:00',
                ),
        ));


    }
}
