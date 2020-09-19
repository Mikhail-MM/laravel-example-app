<?php

namespace App\Models;

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

    use HasFactory;
}
