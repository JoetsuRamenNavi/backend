<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $styles = ['ラーメン', 'つけ麺', '担々麺'];

        $testData = [];

        for ($i = 1; $i <= 20; $i++) {
            $testData[] = [
                'style' => $styles[array_rand($styles)],
                'store_id' => rand(1, 5),
            ];
        }

        DB::table('styles')->insert($testData);
    }
}
