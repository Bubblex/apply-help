<?php

use Illuminate\Database\Seeder;

class GoodsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods_types')->insert([
            'name' => '学习用品'
        ]);

        DB::table('goods_types')->insert([
            'name' => '生活用品'
        ]);

        DB::table('goods_types')->insert([
            'name' => '食物'
        ]);
    }
}
