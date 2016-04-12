<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->truncate();
        DB::table('users')->insert([
                [
                'name' => 'test1',
                'email' => 'test1@test.com',
                'password' => bcrypt('123456'),
                'role' => 'admin'
                ],
                [
                    'name' => 'test2',
                    'email' => 'test2@test.com',
                    'password' => bcrypt('123456'),
                    'role' => 'analyzer'
                ],
                [
                    'name' => 'test3',
                    'email' => 'test3@test.com',
                    'password' => bcrypt('123456'),
                    'role' => 'demander'
                ]
            ]);
    }
}
