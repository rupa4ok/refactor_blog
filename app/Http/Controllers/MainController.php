<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		$articles = [];
		
		return view('main', compact('articles'));
	}
}
