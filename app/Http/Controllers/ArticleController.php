<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

  public function listLatestArticles() {
    return view('template-example/landing', [
      'articles' => Article::take(3)->latest()->get()
    ]);
  }

  public function getArticleById($id) {
    return view('template-example/generic-article', [
      'article' => Article::find($id)
    ]);
  }
}
