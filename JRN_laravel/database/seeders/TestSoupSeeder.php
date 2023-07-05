<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSoupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soups = ['味噌', 'しょうゆ', '塩', 'トンコツ'];

        $testData = [];

        for ($i = 1; $i <= 20; $i++) {
            $testData[] = [
                'soup' => $soups[array_rand($soups)],
                'store_id' => rand(1, 5),
            ];
        }

        DB::table('soups')->insert($testData);
    }
}
