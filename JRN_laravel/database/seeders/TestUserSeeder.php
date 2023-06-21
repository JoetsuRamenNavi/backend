<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=>'aaa',
                'password'=>'password',
                'mail'=>'test@hal.ac.jp',
                'age'=>'10',
            ],
            [
                'name'=>'bbb',
                'password'=>'password2',
                'mail'=>'test@hal.ac.jp',
                'age'=>'20',
            ],
            [
                'name'=>'ccc',
                'password'=>'password3',
                'mail'=>'test@hal.ac.jp',
                'age'=>'30',
            ],
            [
                'name'=>'ddd',
                'password'=>'password4',
                'mail'=>'test@hal.ac.jp',
                'age'=>'40',
            ],
            [
                'name'=>'eee',
                'password'=>'password5',
                'mail'=>'test@hal.ac.jp',
                'age'=>'50',
            ],
            [
                'name'=>'fff',
                'password'=>'password6',
                'mail'=>'test@hal.ac.jp',
                'age'=>'60',
            ],
            [
                'name'=>'ggg',
                'password'=>'password7',
                'mail'=>'test@hal.ac.jp',
                'age'=>'70',
            ],
            [
                'name'=>'hhh',
                'password'=>'password8',
                'mail'=>'test@hal.ac.jp',
                'age'=>'80',
            ],
            [
                'name'=>'iii',
                'password'=>'password9',
                'mail'=>'test@hal.ac.jp',
                'age'=>'90',
            ],
            [
                'name'=>'jjj',
                'password'=>'password10',
                'mail'=>'test@hal.ac.jp',
                'age'=>'100',
            ],
        ]);
    }
}
