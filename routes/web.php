<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
  // Gets the 'name' param from the query string i.e. ?name=jeff
  $name = request('name');

  // Pass in arbitrary HTML for example.
  $html = '<div style="background-color: red">Greetings, Earthling</div>';

  // Pass the data to the view.
  return view('test', [
    'name' => $name,
    'html' => $html
  ]);
});

// Using URL Params.
Route::get('/posts/{post}', function($postParam) {
  // Show a 404 if there is no URL param.

  if (!$postParam) {
    abort(404, "Sorry, that post was not found!");
  }

  return view('post', [
    'postEntity' => $postParam
  ]);
});

// Using a controller instead of passing a closure directly.
// We can create this controller with the Laravel Artisan CLI
// php artisan make:controller PostsController

// When we hit this route, pass in the params into the 'render' method.
Route::get('/posts-controller/{post}', [PostsController::class, 'render']);