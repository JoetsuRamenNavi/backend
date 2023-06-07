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
                'age'=>'10',
                'favorite_store'=>'1',
            ],
            [
                'name'=>'bbb',
                'password'=>'password2',
                'age'=>'20',
                'favorite_store'=>'2',
            ],
            [
                'name'=>'ccc',
                'password'=>'password3',
                'age'=>'30',
                'favorite_store'=>'3',
            ],
            [
                'name'=>'ddd',
                'password'=>'password4',
                'age'=>'40',
                'favorite_store'=>'4',
            ],
            [
                'name'=>'eee',
                'password'=>'password5',
                'age'=>'50',
                'favorite_store'=>'5',
            ],
            [
                'name'=>'fff',
                'password'=>'password6',
                'age'=>'60',
                'favorite_store'=>'1',
            ],
            [
                'name'=>'ggg',
                'password'=>'password7',
                'age'=>'70',
                'favorite_store'=>'2',
            ],
            [
                'name'=>'hhh',
                'password'=>'password8',
                'age'=>'80',
                'favorite_store'=>'3',
            ],
            [
                'name'=>'iii',
                'password'=>'password9',
                'age'=>'90',
                'favorite_store'=>'4',
            ],
            [
                'name'=>'jjj',
                'password'=>'password10',
                'age'=>'100',
                'favorite_store'=>'5',
            ],
        ]);
    }
}
