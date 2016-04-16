<?php

use Illuminate\Database\Seeder;

class BonusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bonuses')->insert([
            [
                'user_id' => '2',
                'all' => 1000.0,
                'left' => 800.0,
                'pending' => 200.0
            ]
        ]);
    }
}
