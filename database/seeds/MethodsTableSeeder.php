<?php

use Illuminate\Database\Seeder;

class MethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('methods')->insert([
                [
                'name' => 'method1',
                'description' => 'This is method1',
                'price' => 100
                ],
                [
                'name' => 'method2',
                'description' => 'This is method2',
                'price' => 300
                ],
                [
                'name' => 'method3',
                'description' => 'This is method3',
                'price' => 1000
                ]
            ]);
    }
}
