<?php

namespace App\Http\Controllers;

use App\Entity\Article\Article;
use App\Entity\Article\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		$articles = Article::paginate(20);
		$categories = Category::whereIsRoot()->defaultOrder()->getModels();

		return view('main', compact('categories', 'articles'));
	}
	
	public function show($slug)
	{
		$parent_id = Category::whereSlug($slug)->get('id');
		
		dd ($parent_id);
		
		$current = $parent_id[0]->id;
		$articles = $articles = Article::whereCategoryId($current)->get();;
		return view('show', compact('subSlug', 'articles'));
	}
}