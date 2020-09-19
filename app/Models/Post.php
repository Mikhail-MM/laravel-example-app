<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts'; // You can specify a custom table name - it's inferred from the Class Name
    protected $primaryKey = 'id'; // This is just for show - it infers a PK of 'id' by default.
    use HasFactory;
}
