<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestMenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mens = ['細麺', '太麺', '担々麺', '中華麺', 'うどん'];

        $testData = [];

        for ($i = 1; $i <= 20; $i++) {
            $testData[] = [
                'mens' => $mens[array_rand($mens)],
                'store_id' => rand(1, 5),
            ];
        }

        DB::table('mens')->insert($testData);
    }
}
