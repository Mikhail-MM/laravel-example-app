<?php

namespace App\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    /* 
      You can white-list certain model-bound params
        
        protected $fillable = ['title', 'body'];

      You can also do the inverse.
      This will block the values from being passed to the SQL query entirely.

        proteced $guarded = [];
    */

    protected $guarded = [];
    public function path() {
      return route('articles.getById', $this->id);
    }
    public function getAuthorOfArticle() {
      // You need to specify the foreign key name
      // Because it infers from the METHOD NAME!

      return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function tags() {
      return $this->belongsToMany('App\Models\Tag');
    }

    use HasFactory;
}
