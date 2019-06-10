<?php

namespace App\Entity\Article;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
	use NodeTrait;
	
	protected $table = 'categories';
	public $timestamps = false;
	public $forceDeleting = true;
	protected $fillable = ['name', 'slug', 'parent_id'];
	
}
