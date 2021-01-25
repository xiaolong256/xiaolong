<?php

use Faker\Generator as Faker;
use App\Models\Article;
use Illuminate\Support\Str;
$factory->define(App\Model\Article::class, function (Faker $faker) {
    return [
        //   
        //    'user_id' =>$faker->Str::random(10),
        //     'title' =>$faker->title,
        //     'content'=>$faker->sentence(),
        //     'created_at'=>date(),
        //      'updated_at' =>date()
    ];
});
