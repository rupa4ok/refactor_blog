<?php

namespace App\Http\Controllers\Cabinet;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
	    $articles = [];
    	
        return view('cabinet.home', compact('articles'));
    }
}