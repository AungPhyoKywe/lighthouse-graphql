<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
       'title' => $faker->title,
       'author'=> $faker->name,
       'image'=>$faker->imageUrl,
       'description'=>$faker->sentence,
       'link'=> $faker->url,
       'featured'=>$faker->boolean,
       'category_id'=> factory(App\Category::class)->create()->id
    ];
});
