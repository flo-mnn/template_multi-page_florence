<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Coordinate;
use App\Models\Opening;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index (){
        $articles = Article::all();
        // separating sentences
        $sentences = explode('.',$articles[2]->text);
        $paragraphe1 = ($sentences[0].".".$sentences[1].".");
        // extracting "lust"
        $pos = strpos($sentences[2], 'lust');
        $s2p1 = substr($sentences[2], 0, $pos);
        $s2p2 = substr($sentences[2], $pos, 4);
        $s2p3 = substr($sentences[2], $pos+4, strlen($sentences[2])).".".$sentences[3].".";
        $articlesText = [$paragraphe1,[$s2p1,$s2p2,$s2p3]];

        $openings = Opening::all();
        $coordinates = Coordinate::all();

        return view('pages.store',compact('articles','articlesText','openings','coordinates'));
    }
}
