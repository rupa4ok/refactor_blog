<?php

use App\Entity\Article\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
	return [
		'title' => $title = $faker->unique()->sentence,
		'content' => $faker->text(),
		'images' => null,
		'slug' => str_slug($title),
		'category_id' => random_int(1, 3),
		'user_id' => 1,
	];
});