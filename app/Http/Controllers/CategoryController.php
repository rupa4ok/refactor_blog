<?php

namespace App\Http\Controllers;

use App\Entity\Article\Article;
use App\Entity\Article\Category;
use Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category, $slug)
    {
    	$parent_id = $category
		    ->whereSlug($slug)
		    ->get('id');
	    $current = $parent_id[0]->id;
    	$articles = Article::whereCategoryId($current)->get();
    	$subCategory = $category->whereParent_id($current)->get();
    	$category = $slug;
    	
        return view('main', compact('category', 'subCategory', 'articles'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(Category $category, $slug, $subSlug)
    {
	    $parent_id = $category
		    ->whereSlug($subSlug)
		    ->get('id');
	    $current = $parent_id[0]->id;
	    $articles = $articles = Article::whereCategoryId($current)->get();;
	    return view('show', compact('subSlug', 'articles'));
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
