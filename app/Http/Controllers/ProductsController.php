<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('pages.products',compact('articles'));
    }
}
