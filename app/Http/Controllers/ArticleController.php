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

  public function showArticleCreationForm() {
    // Show Creation View
    return view('template-example/generic-article-create-form');
  }

  public function createNewArticle() {

    $article = new Article();

    $article->title = request('title');
    $article->body = request('body');

    $article->save();

    return redirect("/article/{$article->id}");
  }

  public function showEditForm ($id) {
    // Show edit form
    return view('template-example/generic-article-edit-form', [
      'article' => Article::find($id)
    ]);
  }
  public function commitArticleEdit($id) {
    // Persist the edit.
    $article = Article::find($id);

    $article->title = request('title');
    $article->body = request('body');

    $article->save();

    return redirect("/article/{$article->id}");
  }
  public function delete() {
    // Delete the function.
  }
}
