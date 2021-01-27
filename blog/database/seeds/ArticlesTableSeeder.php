<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

       DB::table('articles')->insert([
            'title' => 'Laravel ',
            'user_id'=>rand(1,10),
            'content'=>'Laravel 包含一个填充类可以为你的数据库填充测试数据。所有的填充类都放在 database/seeds 目录下。',
]); }
}
