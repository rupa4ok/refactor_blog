<?php

namespace App\Entity\Article;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

/**
 * App\Entity\Article\Category
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property-read \Kalnoy\Nestedset\Collection|\App\Entity\Article\Category[] $children
 * @property-read \App\Entity\Article\Category|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Category d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Article\Category newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Article\Category newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Entity\Article\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Category whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Category whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Category whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Category whereSlug($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
	use NodeTrait;
	
	protected $table = 'categories';
	public $timestamps = false;
	public $forceDeleting = true;
	protected $fillable = ['name', 'slug', 'parent_id'];
	
	public function getRouteKey()
	{
		return $this->id . '-' . 'slug';
	}
	
	public function getRouteKeyName()
	{
		return 'slug';
	}
}
