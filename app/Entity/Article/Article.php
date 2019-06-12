<?php

namespace App\Entity\Article;

use App\Entity\Article\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table = 'articles';
	
	protected $fillable = ['title', 'content', 'category_id', 'user_id'];
	
	public function category()
	{
		return $this->hasMany(Category::class, 'category_id', 'id');
	}
	
	public function author()
	{
		return $this->hasMany(User::class, 'user_id', 'id');
	}
}
