<?php

namespace App\Http\Controllers;

use App\Entity\Article\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category)
    {
	    $articles = [];
	    
        return view('main', compact('articles', 'category'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        //
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
