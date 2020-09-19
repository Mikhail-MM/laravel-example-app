<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function render($slug) {
    $post = Post::where('slug', $slug)->firstOrFail();
    
    return view('db-post', [
      'post' => $post->body
    ]);
  }
}
