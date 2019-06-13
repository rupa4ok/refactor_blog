<?php

namespace App\Entity\Article;

use App\Entity\Article\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Entity\Article\Article
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $slug
 * @property string|null $images
 * @property int|null $user_id
 * @property int|null $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $author
 * @property-read \Kalnoy\Nestedset\Collection|\App\Entity\Article\Category[] $category
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entity\Article\Article whereUserId($value)
 * @mixin \Eloquent
 */
class Article extends Model
{
	protected $table = 'articles';
	
	protected $fillable = ['title', 'content', 'category_id', 'user_id'];
	
	public function category()
	{
		return $this->hasMany(Category::class, 'category_id', 'category_id');
	}
	
	public function author()
	{
		return $this->hasMany(User::class, 'user_id', 'id');
	}
}
