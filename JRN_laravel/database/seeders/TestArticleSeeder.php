<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['食べてきました', '新メニューを試した', 'このラーメンは絶品', '今日のランチ', 'お気に入りの一杯'];
        $posts = ['美味しかったです', 'お腹いっぱい', 'また来ます', 'おすすめです', '最高のラーメン'];

        $data = [];

        for ($i = 1; $i <= 40; $i++) {
            $randomDate = Carbon::createFromDate(2023, rand(1, 12), rand(1, 28))->format('Y/m/d');
            $randomTitle = $titles[array_rand($titles)];
            $randomPost = $posts[array_rand($posts)];

            $data[] = [
                'id' => $i,
                'title' => $randomTitle,
                'date' => $randomDate,
                'post' => $randomPost,
                'lunch_flag' => (bool)rand(0, 1),
                'store_id' => rand(1, 5),
            ];
        }

        DB::table('articles')->insert($data);
    }
}
