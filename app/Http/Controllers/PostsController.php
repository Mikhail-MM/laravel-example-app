<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function render($slug) {
    $post = DB::table('posts')->where('slug', $slug)->first();
    
    return view('db-post', [
      'post' => $post->body
    ]);
  }
}
