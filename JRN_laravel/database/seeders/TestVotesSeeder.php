<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestVotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $now = Carbon::now();
    $battleTerms = ['ターム1', 'ターム2', 'ターム3', 'ターム4'];

    $testData = [];

    foreach ($battleTerms as $term) {
        for ($i = 1; $i <= 10; $i++) {
            $testData[] = [
                'store_id' => $i,
                'battle_term' => $term,
                'vote' => rand(100,300),
            ];
        }
    }

    DB::table('votes')->insert($testData);
    }
}
