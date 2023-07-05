<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            TestUserSeeder::class,
            TestStoreSeeder::class,
            TestArticleSeeder::class,
            TestSoupSeeder::class,
            TestMenSeeder::class,
            TestStyleSeeder::class,
            TestUserWentstoreSeeder::class,
            TestJoinStoreSeeder::class,
            TestUserVotesSeeder::class
        ]);
    }
}
