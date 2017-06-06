<?php

use Illuminate\Database\Seeder;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
            'goods_type_id' => 1,
            'name' => '书包'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 1,
            'name' => '文具盒'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 1,
            'name' => '笔'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 1,
            'name' => '图书'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 1,
            'name' => '本子'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '棉服'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => 'T恤'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '加棉鞋子'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '凉鞋'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '长裤'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '短裤'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '裙子'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '运动服'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '被子'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '垫子'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '电热毯'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '电热宝'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 2,
            'name' => '自行车'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 3,
            'name' => '米'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 3,
            'name' => '面'
        ]);

        DB::table('goods')->insert([
            'goods_type_id' => 3,
            'name' => '油'
        ]);
    }
}
