<?php

use Illuminate\Database\Seeder;

class PaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->insert([
            [
                'logo' => '1.jpg',
                'method' => '支付宝',
                'account' => '123123123123@qq.com'
            ],
            [
                'logo' => '2.jpg',
                'method' => '建设银行',
                'account' => '1231231231231111111'
            ],
            [
                'logo' => '3.jpg',
                'method' => '微信支付',
                'account' => '123121231231111111'
            ]
        ]);
    }
}
