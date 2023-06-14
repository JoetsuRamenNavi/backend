<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestStoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            [
                'store_id'=>'1',
                'store_name'=>'ラーメン1',
                'description'=>'おいしいよ',
                'sake_flag'=>true,
                'comment'=>'本日営業してます',
                'star_up'=>'3',
                'ranking'=>'10',
                'id'=>'5',
            ],
            [
                'store_id'=>'2',
                'store_name'=>'ラーメン2',
                'description'=>'おいしいよ',
                'sake_flag'=>true,
                'comment'=>'本日営業してます',
                'star_up'=>'3',
                'ranking'=>'10',
                'id'=>'6',
            ],
            [
                'store_id'=>'3',
                'store_name'=>'ラーメン3',
                'description'=>'おいしいよ',
                'sake_flag'=>true,
                'comment'=>'本日営業してます',
                'star_up'=>'3',
                'ranking'=>'10',
                'id'=>'7',
            ],
            [
                'store_id'=>'4',
                'store_name'=>'ラーメン4',
                'description'=>'おいしいよ',
                'sake_flag'=>true,
                'comment'=>'本日営業してます',
                'star_up'=>'3',
                'ranking'=>'10',
                'id'=>'8',
            ],
            [
                'store_id'=>'5',
                'store_name'=>'ラーメン5',
                'description'=>'おいしいよ',
                'sake_flag'=>true,
                'comment'=>'本日営業してます',
                'star_up'=>'3',
                'ranking'=>'10',
                'id'=>'9',
            ],


        ]);
    }
}
