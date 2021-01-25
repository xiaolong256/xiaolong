<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
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
       // $article = factory(App\Models\Article::class,50)->create();
          DB::table('articles')->insert([
             'title' 	=>Str::random(10),
             'user_id'  => rand(1,10),
             'content'  =>'按时发生就安抚按时沙发按时发顺丰然后',
          ]);
    }
}
