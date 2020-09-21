<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

  public function listLatestArticles() {
    if (request('tag')) {
      $tagFound = Tag::where('name', request('tag'))->firstOrFail();
      if ($tagFound) {
        $articles = $tagFound->articles;
      } 
    } else {
      $articles = Article::take(3)->latest()->get();
    }
    

    foreach($articles as $article) {
      $article['tags'] = $article->tags;
    }

    return view('template-example/landing', [
      'articles' => $articles
    ]);
  }

  public function getArticleById($id) {
    return view('template-example/generic-article', [
      'article' => Article::findOrFail($id)
    ]);
  }

    public function getModelBoundArticleById(Article $article) {
    /*

      If you want to override the key that is used by the lookup, you need to override a function
      and return the key pointing to the SQL column that you're looking for

      For example, to look for 'title':

      public function getRouteKeyName() {
        return 'title';
      }

    */

    return view('template-example/generic-article', [
      'article' => $article
    ]);
  }

  public function showArticleCreationForm() {
    // Show Creation View
    return view('template-example/generic-article-create-form');
  }

  public function createNewArticle() {

    // Add Validations
    // By Default, if validation fails, Laravel will populate back to the original page and pass in an "Errors" object
    $validatedAttriutes = request()->validate([
      'title' => ['required', 'min:3', 'max:255'],
      'body' => ['required', 'min:1']
    ]);

    /*

      $article = new Article();

      $article->title = request('title');
      $article->body = request('body');

      $article->save();

    */

    // Refactor 

    $article = Article::create([
      'title' => request('title'),
      'body' => request('body'),
    ]);

    /* 
      The validation method returns a keyed associative array which you can pass directly in:
      
      Article::create(
        $validatedAttriutes
      );

    */

    dd($article->path());

    return redirect(
      // First argument is the route name, second argument is the param to pass in.
      route('articles.getById', $article->id)
      // Or you can even do $article->path() to use the method we added directly to the model.
    );
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

  public function refactoredArticleEdit(Article $article) {

    $validatedAttriutes = request()->validate([
      'title' => ['required', 'min:3', 'max:255'],
      'body' => ['required', 'min:1']
    ]);

    $article->update(
      $validatedAttriutes
    );

    return redirect("/article/{$article->id}");
  }

  public function delete() {
    // Delete the function.
  }
}
