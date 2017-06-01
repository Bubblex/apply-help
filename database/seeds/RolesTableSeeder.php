<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => '普通用户'
        ]);

        DB::table('roles')->insert([
            'name' => '管理员'
        ]);
    }
}
