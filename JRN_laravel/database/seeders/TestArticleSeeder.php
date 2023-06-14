<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
        [
            'id'=>'1',
            'title'=>'食べてきました',
            'date'=>'2023/06/01',
            'post'=>'美味しかったです',
            'lunch_flag'=>true,
            'store_id'=>'1',
        ],
        [
            'id'=>'2',
            'title'=>'食べてきました',
            'date'=>'2023/06/01',
            'post'=>'美味しかったです',
            'lunch_flag'=>true,
            'store_id'=>'2',
        ],
        [
            'id'=>'3',
            'title'=>'食べてきました',
            'date'=>'2023/06/01',
            'post'=>'美味しかったです',
            'lunch_flag'=>true,
            'store_id'=>'3',
        ],
        [
            'id'=>'4',
            'title'=>'食べてきました',
            'date'=>'2023/06/01',
            'post'=>'美味しかったです',
            'lunch_flag'=>true,
            'store_id'=>'4',
        ],
        [
            'id'=>'5',
            'title'=>'食べてきました',
            'date'=>'2023/06/01',
            'post'=>'美味しかったです',
            'lunch_flag'=>true,
            'store_id'=>'5',
        ],
        [
            'id'=>'6',
            'title'=>'また食べてきました',
            'date'=>'2023/06/05',
            'post'=>'また美味しかったです',
            'lunch_flag'=>true,
            'store_id'=>'1',
        ],
        [
            'id'=>'7',
            'title'=>'また食べてきました',
            'date'=>'2023/06/05',
            'post'=>'また美味しかったです',
            'lunch_flag'=>true,
            'store_id'=>'2',
        ],
        [
            'id'=>'8',
            'title'=>'またまた食べてきました',
            'date'=>'2023/06/05',
            'post'=>'またまた美味しかったです',
            'lunch_flag'=>true,
            'store_id'=>'1',
        ],
    ]);
}
}
