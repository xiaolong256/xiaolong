<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Admin;
class Article extends Model
{
    //  

    protected $fillable=['user_id','title','content'];
    public function User()
   {  
     return $this->belongsTo(User::class);
   }
  
   public function admin()
   {
     return $this->belongsTo(Admin::class);

    }
}
