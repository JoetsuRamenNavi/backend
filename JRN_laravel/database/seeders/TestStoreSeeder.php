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
                'store_name'=>'麺屋風花×千代の光酒造',
                'tel'=>'025-545-3335',
                'address'=>'新潟県上越市大字下門前1650',
                'store_url'=>'https://www.menya-agosuke.com',
                'image'=>'/entry/the1st/image09.png',
                'entry_item'=>'発酵味噌らぁめん',
                'entry_price'=>'950',
                'entry_comment'=>'化学調味料を一切使わない同店。野菜の甘みが溶け込んだスープに、酒かすやチーズ、ヨーグルトなどの発酵食品を入れた特製みそダレを合わせた。チャイで煮込んだアジアンテイストのチャーシューをトッピングした。',
                'id'=>'11',
            ],
            [
                'store_id'=>'2',
                'store_name'=>'GOGO宝来軒x竹田酒造店',
                'tel'=>'025-520-6078',
                'address'=>'新潟県上越市大潟区渋柿浜1770',
                'store_url'=>'',
                'image'=>'/entry/the1st/image10.png',
                'entry_item'=>'酒粕塩白湯 雅-ミヤビ-',
                'entry_price'=>'1000',
                'entry_comment'=>'レモンやパプリカの盛り付けに気品を感じるラーメン。スープは鶏油の香りとだしの風味が利いた和風ですっきりとした味わい。酒かすとわさびの特製ペーストを溶かすと、爽やかな風味と辛味が全体の味を引き締める。',
                'id'=>'12',
            ],
            [
                'store_id'=>'3',
                'store_name'=>'麺屋あごすけ×代々菊醸造',
                'tel'=>'025-545-3335',
                'address'=>'新潟県上越市下門前1650',
                'store_url'=>'',
                'image'=>'/entry/the1st/image11.png',
                'entry_item'=>'ローストビーフの贅沢まぜそば',
                'entry_price'=>'1200',
                'entry_comment'=>'数日かけて作るローストビーフを贅沢にトッピング。県産小麦の全粒粉を使った太麺を、酒かすをブレンドした肉みそと特製の牛オイルと絡めた。レッドキャベツの甘酢漬けでさっぱり感も。数量限定。',
                'id'=>'13',
            ],
            [
                'store_id'=>'4',
                'store_name'=>'王華飯店×頚城酒造',
                'tel'=>'025-525-9012',
                'address'=>'新潟県上越市仲町3-7-9',
                'store_url'=>'',
                'image'=>'/entry/the1st/image12.png',
                'entry_item'=>'スパイスキーマラーメン',
                'entry_price'=>'1000',
                'entry_comment'=>'酒かすを溶かしたみそベースのスープに、20種以上のスパイスを使った自家製キーマカレーを合わせた。雪室ジャガイモの素揚げなど野菜もたっぷり。「追いスパイス」も可能。小ライスで最後までスープを堪能するのもオススメ。',
                'id'=>'14',
            ],
            [
                'store_id'=>'5',
                'store_name'=>'たんぽぽラーメン×よしかわ杜氏の郷',
                'tel'=>'025-532-2739',
                'address'=>'新潟県上越市三和区神明町1290-56',
                'store_url'=>'https://tnpp.jp/#Top',
                'image'=>'/entry/the1st/image13.png',
                'entry_item'=>'漆黒のイカスミ麺',
                'entry_price'=>'1050',
                'entry_comment'=>'衝撃的な黒さのイカスミのスープは、酒かすを加えたことで臭みが消え、イカのうまみが凝縮されている。酒かすとイカの塩辛が入った自家製せんべいは噛めば噛むほど味が染み出て、そのままでもスープに漬けてもいい。1日15食限定。',
                'id'=>'15',
            ],

            [
                'store_id'=>'6',
                'store_name'=>'比他棒×よしかわ杜氏の郷',
                'tel'=>'025-520-7519',
                'address'=>'新潟県上越市東本町3-2-59',
                'store_url'=>'',
                'image'=>'/entry/the1st/image14.png',
                'entry_item'=>'高田ビャンビャン麺',
                'entry_price'=>'1650',
                'entry_comment'=>'麺は平麺で、スープには酒かすと数十種類の素材を使い、うまみや酸味、辛味など様々な味が楽しめる。トッピングはカキやホタテ、チャーシューと豪華で、ネギとショウガの千切りで後味も爽やか。',
                'id'=>'16',
            ],
            [
                'store_id'=>'7',
                'store_name'=>'はな禅×丸山酒造場',
                'tel'=>'025-522-9255',
                'address'=>'新潟県上越市中田原105-8',
                'store_url'=>'',
                'image'=>'/entry/the1st/image15.png',
                'entry_item'=>'雪むろ酒かすラーメン',
                'entry_price'=>'0',
                'entry_comment'=>'毎週土曜15食限定。酒かすと上越の食材の可能性を伝えたいと考え、毎週違う内容の雪むろ酒かすラーメンを提供する。魚介系やみそ系、過去に提供したことがある雪むろ酒かすラーメンも登場予定。',
                'id'=>'17',
            ],

            [
                'store_id'=>'8',
                'store_name'=>'菜心×妙高酒造',
                'tel'=>'025-526-8924',
                'address'=>'新潟県上越市東城町1-12-16',
                'store_url'=>'',
                'image'=>'/entry/the1st/image16.png',
                'entry_item'=>'雪むろクリスピー担々麺',
                'entry_price'=>'900',
                'entry_comment'=>'看板メニューの担々麺に酒かすを加え、雪室ニンジンの素揚げやザーサイのトッピングで食感も楽しい。別添えの具入りラー油、デュカスパイス、ガーリックチップをかければ、豊かな風味とザクザク食感で一気に奥深い味わいに。',
                'id'=>'18',
            ],

            [
                'store_id'=>'9',
                'store_name'=>'宝来軒参×上越酒造店',
                'tel'=>'025-523-1750',
                'address'=>'新潟県上越市大豆1-12-59',
                'store_url'=>'',
                'image'=>'/entry/the1st/image17.png',
                'entry_item'=>'辛味噌つけ麺〜紅越後〜',
                'entry_price'=>'1050',
                'entry_comment'=>'まぜそばとつけ麺が同時に味わえる。 まぜそばスタイルで酒かす入り特製辛みその香りをダイレクトに楽しむのも、すっきりと切れ味のあるスープにつけて食べるのもいい。麺は自家製太麺、手延べ麺、細麺から選べる。',
                'id'=>'19',
            ],


            [
                'store_id'=>'10',
                'store_name'=>'食堂ニューミサ×鮎正宗酒造',
                'tel'=>'025-574-2096',
                'address'=>'新潟県上越市中郷区稲荷山367',
                'store_url'=>'https://r898600.gorp.jp/',
                'image'=>'/entry/the1st/image18.png',
                'entry_item'=>'酒かすかんずりみそラテ',
                'entry_price'=>'1300',
                'entry_comment'=>'スープにかんずりをまぜた人気の酒かすみそラーメンの上にフォームミルクを注ぎ、よりまろやかに。可愛らしいラテアートは、お客さんに楽しんでもらいたいと考えたアイデア。別添えのゴマ油で味変もできる。',
                'id'=>'20',
            ],
        ]);
    }
}
