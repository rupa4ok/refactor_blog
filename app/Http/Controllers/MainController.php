<?php

namespace App\Http\Controllers;

use App\Entity\Article\Article;
use App\Entity\Article\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		$articles = Article::all();
		$categories = Category::whereIsRoot()->defaultOrder()->getModels();

		return view('main', compact('categories', 'articles'));
	}
}
