<?php

use App\Entity\Article\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
	return [
		'name' => $name = $faker->unique()->word,
		'slug' => str_slug($name),
		'parent_id' => null
	];
});