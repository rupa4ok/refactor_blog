<?php

namespace App\Http\Controllers;

use App\Entity\Article\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($article_slug)
    {
    	$article_slug = 123;
    	
    	return view('index', compact('article_slug'));
    }
}
