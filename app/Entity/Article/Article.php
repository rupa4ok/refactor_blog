<?php

namespace App\Entity\Article;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $table = 'articles';
	
	protected $fillable = ['title', 'content', 'category_id', 'user_id'];
}
