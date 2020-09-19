<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function getArticleById($id) {

    $article = Article::find($id);
    
    return view('template-example/generic-article', [
      'article' => $article
    ]);

  }
}
