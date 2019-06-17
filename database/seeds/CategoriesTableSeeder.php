<?php

use Illuminate\Database\Seeder;
use App\Entity\Article\Category;

class CategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Category::class, 3)->create()->each(function(Category $category) {
			$counts = [2, random_int(2, 6)];
			$category->children()->saveMany(factory(Category::class, $counts[array_rand($counts)])
				->create());
		});
	}
}