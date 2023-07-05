<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestJoinStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $battleNames = ['バトルA', 'バトルB', 'バトルC', 'バトルD'];
        $battleTerms = ['ターム1', 'ターム2', 'ターム3', 'ターム4'];
        $ramenNames = ['ラーメン1', 'ラーメン2', 'ラーメン3', 'ラーメン4', 'ラーメン5'];

        $usedStoreIds = [];

        $testData = [];

        foreach ($battleTerms as $battleTerm) {
            for ($i = 1; $i <= 5; $i++) {
                do {
                    $storeId = rand(1, 5);
                } while (in_array($storeId, $usedStoreIds));

                $usedStoreIds[] = $storeId;

                $testData[] = [
                    'battle_name' => $battleNames[array_rand($battleNames)],
                    'battle_term' => $battleTerm,
                    'ramen_name' => $ramenNames[array_rand($ramenNames)],
                    'ramen_price' => rand(500, 1000),
                    'store_id' => $storeId,
                ];
            }

            $usedStoreIds = [];
        }

        DB::table('join_stores')->insert($testData);
    }
}
