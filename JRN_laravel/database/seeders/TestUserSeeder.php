<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class TestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $testData = [];

        for ($i = 1; $i <= 100; $i++) {
            $testData[] = [
                'nickname' => $faker->name,
                'password' => Hash::make('password' . $i),
                'mail' => $faker->unique()->safeEmail,
            ];
        }

        DB::table('users')->insert($testData);
    }
}
