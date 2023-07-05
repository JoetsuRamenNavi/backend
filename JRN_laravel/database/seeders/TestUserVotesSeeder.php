<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestUserVotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        $battleNames = ['バトルA', 'バトルB', 'バトルC', 'バトルD'];
        $battleTerms = ['ターム1', 'ターム2', 'ターム3', 'ターム4'];

        $testData = [];

        for ($i = 1; $i <= 20; $i++) {
            $testData[] = [
                'battle_name' => $battleNames[array_rand($battleNames)],
                'battle_term' => $battleTerms[array_rand($battleTerms)],
                'created_at' => $now,
                'updated_at' => $now,
                'id' => rand(1, 10),
                'join_id' => rand(1, 5), // 既存のstore
            ];
        }

        DB::table('user_votes')->insert($testData);
    }
    }
