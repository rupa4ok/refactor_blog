<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Article\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	
	public function index()
	{
		$articles = $articles = Article::get();;
		
		return view('admin.home', compact('articles'));
	}
}