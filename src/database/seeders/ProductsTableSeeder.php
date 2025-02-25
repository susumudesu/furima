<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '腕時計',
            'image' => 'Armani+Mens+Clock.jpg',
            'status' => '良好',
            'description' => 'スタイリッシュなデザインのメンズ腕時計',
            'price' => '15000',
            'color' => 'シルバー'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'HDD',
            'image' => 'HDD+Hard+Disk.jpg',
            'status' => '目立った傷や汚れなし',
            'description' => '高速で信頼性の高いハードディスク',
            'price' => '5000',
            'color' => 'ブラック'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '玉ねぎ3束',
            'image' => 'iLoveIMG+d.jpg',
            'status' => 'やや傷や汚れあり',
            'description' => '新鮮な玉ねぎ3束のセット',
            'price' => '300',
            'color' => ''
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => '革靴',
            'image' => 'Leather+Shoes+Product+Photo.jpg',
            'status' => '状態が悪い',
            'description' => 'クラシックなデザインの革靴',
            'price' => '4000',
            'color' => 'ブラック'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ノートPC',
            'image' => 'Living+Room+Laptop.jpg',
            'status' => '良好',
            'description' => '高性能なノートパソコン',
            'price' => '45000',
            'color' => 'グレー'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'マイク',
            'image' => 'Music+Mic+4632231.jpg',
            'status' => '目立った傷や汚れなし',
            'description' => '高音質のレコーディング用マイク',
            'price' => '8000',
            'color' => 'ブラック'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'ショルダーバッグ',
            'image' => 'Purse+fashion+pocket.jpg',
            'status' => 'やや傷や汚れあり',
            'description' => 'おしゃれなショルダーバッグ',
            'price' => '3500',
            'color' => 'レッド'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'タンブラー',
            'image' => 'Tumbler+souvenir.jpg',
            'status' => '状態が悪い',
            'description' => '使いやすいタンブラー',
            'price' => '500',
            'color' => 'ブラック'
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'コーヒーミル',
            'image' => 'Waitress+with+Coffee+Grinder.jpg',
            'status' => '良好',
            'description' => '手動のコーヒーミル',
            'price' => '4000',
            'color' => ''
        ];
        DB::table('products')->insert($param);
        $param = [
            'name' => 'メイクセット',
            'image' => 'MakeUpSet.jpg',
            'status' => '目立った傷や汚れなし',
            'description' => '便利なメイクアップセット',
            'price' => '2500',
            'color' => 'ピンク'
        ];
        DB::table('products')->insert($param);
    }
}
