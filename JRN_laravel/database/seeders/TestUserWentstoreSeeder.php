<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TestUserWentstoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testData = [];

        for ($i = 1; $i <= 20; $i++) {
            $testData[] = [
                'id' => $i,
                'store_id' => rand(1, 5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('user_wentstores')->insert($testData);
    }
}
