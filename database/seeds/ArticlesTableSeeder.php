<?php

use App\User;

use App\Entity\Article\Category;
use Illuminate\Database\Seeder;
use App\Entity\Article\Article;

class ArticlesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Article::class, 100)->create()->each(function(Article $article) {
			$article->category()->saveMany(factory(Article::class, random_int(0, 3))->create());
			$article->author()->saveMany(factory(Article::class, random_int(0, 1))->create());
			});
	}
}