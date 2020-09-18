<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function render($postParam) {
    if (!$postParam) {
      abort(404, "Sorry, that post was not found!");
    }

    return view('post', [
      'postEntity' => $postParam
    ]);
  }
}
