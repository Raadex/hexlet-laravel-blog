<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index', ['articles' => Article::simplePaginate(3)]);
    }

    public function show($id)
    {
        return view('article.show', ['article' => Article::findOrFail($id)]);
    }
}
