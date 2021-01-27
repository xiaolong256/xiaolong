<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
class Admin extends Model
{
    //
   public function article()
   {
      return $this->hasMany(Article::class);
   }
}
