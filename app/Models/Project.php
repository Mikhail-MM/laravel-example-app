<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function getProjectOwner() {
      /*
        In the example below, Eloquent will try to match the user_id from the Project model to an id on the User model. 
        Eloquent determines the default foreign key name by examining the name of the relationship method and suffixing the method name with _id. 
        However, if the foreign key on the Phone model is not user_id, you may pass a custom key name as the second argument to the belongsTo method.
      */
      return $this->belongsTo('App\Models\User');
    }
    use HasFactory;
}
